/**
 * This file is part of the Monument
 *
 * PHP version 7.2.00
 *
 * @package     Monument
 * @copyright   2020 monument.com
 * @version     1.0.0
 */
/**
 * classHTML
 *
 * Handles all HTML Dom manipulation
 */

(function () {
    const order = this;

    let formValidator = "";
    const _urls       = {
        "storeData"    : admin_url + "storedata",
        "familyData"   : admin_url + "familydata",
        "AddFamilyData": admin_url + "addfamilydata",
        "productdata"  : admin_url + "order/productdata",
        // "AddOrderData"  : admin_url + "order/addorder",
    };

    const url         = function () {
    };
    url.prototype.get = function (urlFor) {
        return _urls[urlFor];
    };

    // Order's API
    const api               = function () {
    };
    api.prototype.storeData = function (select_store) {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            url    : order.url.get("storeData"),
            type   : 'post',
            data   : {store_id: select_store},
            success: function (response) {
                $("#store_address").html(response.title + "\n" + response.address);
            }
        });
    };

    api.prototype.AddFamilyData = function () {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });
        var name_on_stone = $('#mps-name-on-stone').val();

        var family_id      = $('#mps-family-id').val();
        var family_address = $('#mps-family-address').val();
        var family_city    = $('#mps-family-city').val();
        var family_contact = $('#mps-family-contact').val();
        var family_phone   = $('#mps-family-phone').val();
        $.ajax({
            url   : order.url.get("AddFamilyData"),
            method: 'post',
            data  : {
                name_on_stone : name_on_stone,
                family_id     : family_id,
                family_address: family_address,
                family_city   : family_city,
                family_contact: family_contact,
                family_phone  : family_phone,
            }, // prefer use serialize method

            success: function (data) {
                console.log(data);
                //console.log(data);
            }
        });
    }

    api.prototype.orderProductByID = function (productID) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url    : order.url.get("productdata"),
            type   : 'post',
            data   : {product_id: productID},
            success: function (response) {
                order.html.addProductRow(response);
            }
        });
    };

    api.prototype.getFamilyDataByID = function (familyID) {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });
        $.ajax({
            url    : order.url.get("familyData"),
            type   : 'post',
            data   : {family_id: familyID},
            success: function (response) {
                order.html.fillFamilyForm(response);
            }
        });
    };


    //     api.prototype.AddOrderData = function(){

    //     formValidator.form();        
    //     $.ajaxSetup({
    //         headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
    //     });
    //     var form = $("#order_form").serialize();
    //     //alert($("#add_family_form1").serialize());
    //     //console.log();  
    //     $.ajax({
    //         url: order.url.get('AddOrderData'),
    //         method: 'post',
    //         data:form, // prefer use serialize method

    //         success: function (data) {
    //             //console.log(url);
    //             console.log(data);
    //         }
    //     });
    // }

    const html = function () {
    };

    html.prototype.fillFamilyForm = function (familyData) {
        $("#mps-family-id").val(familyData.id);
        $("#mps-name-on-stone").val(familyData.name_on_stone);
        $("#mps-family-address").val(familyData.family_address);
        $("#mps-family-city").val(familyData.family_city);
        $("#mps-family-contact").val(familyData.family_contact);
        $("#mps-family-phone").val(familyData.family_phone);
    };

    html.prototype.addProductRow = function (productData) {
        let html = '<tr class="mps-product-row">' +
            '<td>' + productData.id + '<input type="hidden" name="product_id[]" value="' + productData.id + '"></td>' +
            '<td>' + productData.number + '<input type="hidden" name="order_num[]" value="' + productData.number + '"></td>' +
            '<td>' + productData.title + '<input type="hidden" name="order_product_name[]" value="' + productData.title + '"></td>' +
            '<td>' + '<input type="number" min="1" name="order_quantity[]" style="width:50px"  class="mps-product-quantity" value="1"></td>' +
            '<td><input type="text" class="mps-product-price" name="order_price[]" style="width:50px" id="product_price" value="' + productData.cost + '"></td>' +
            '<td class="mps-product-amount">' + productData.cost + '</td>' +
            +'</tr>';

        $('#order_table > tbody:last-child').append(html);
        order.setPrices();
    };

    const events = function () {
    };

    events.prototype.bind = function () {
        $(document).on('change', '#mps-select-family', function (e) {
            const familyID = $(this).val();
            order.api.getFamilyDataByID(familyID);
        });

        $(document).on('change', '#mps-select-store', function (e) {
            const storeID = $(this).val();
            order.api.storeData(storeID);
        });

        // $(document).on('click', '#mps-family-form-button', function (e) {
        //     e.preventDefault();
        //    console.log('eventHandler called');
        //     //$('#add_family_form1').submit(); //e.preventDefault();  
        //    order.api.AddFamilyData();
        // });

        $(document).on('click', '#mps-order-form-button', function () {
            //console.log('Order Form');           
            //order.api.AddOrderData();
            formValidator.form();
        });

        $(document).on('change', '#mps-add-product-by-title, #mps-add-product-by-number', function (e) {
            const productID = $(this).val();
            order.api.orderProductByID(productID);
        });

        $(document).on('change', '.mps-product-quantity', function () {
            const quantity = $(this).val();
            const thisRow  = $(this).parents(".mps-product-row");
            const price    = thisRow.find(".mps-product-price").val();

            thisRow.find(".mps-product-amount").html(quantity * price);
            order.setPrices();
        });

        $(document).on('change', '.mps-product-price', function () {
            const price    = $(this).val();
            const thisRow  = $(this).parents(".mps-product-row");
            const quantity = thisRow.find(".mps-product-quantity").val();

            thisRow.find(".mps-product-amount").html(quantity * price);
            order.setPrices();
        });


    };

    const plugin = function () {

    };

    plugin.prototype.init = function () {
        $('.mps-select2').select2(); // init select2
        $('.mps-datepicker').datepicker({
            format     : 'yyyy/mm/dd',
            startDate  : '-0d',
            autoclose  : true,
            autoOpen   : false,
            orientation: 'auto'
        });


        formValidator = $("form[name='order_form']").validate({
            // Specify validation rules
            rules        : {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side

                po_number          : {
                    required: true,
                    digits  : true
                },
                account_date       : "required",
                store_address      : "required",
                oraginal_invoice_no: {
                    required: true,
                    digits  : true
                },
                type_of_order      : "required",
                location           : "required",
                payment_total      : "required",

                email         : {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email   : true
                },
                name_on_stone : "required",
                family_address: "required",
                family_city   : "required",
                family_contact: "required",
                family_phone  : "required",

            },
            // Specify validation error messages
            messages     : {
                po_number          : {
                    digits: "Please enter only Number",
                },
                oraginal_invoice_no: {digits: "Please enter only Number"},
                store_address      : "Please Store Address",
                account_date       : "Please enter Account Date",
                location           : "Please enter Location",
                email              : "Please enter a valid email address",
                type_of_order      : "Type of Order",
                payment_total      : {
                    digits: "Please enter only Number"
                },
                name_on_stone      : "Please enter Name on Stone",
                family_address     : "Please enter Family Address",
                family_city        : "Please enter Family City",
                family_contact     : "Please enter Family Contact",
                family_phone       : "Please enter Family Phone",
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });


    };

    order.setPrices = function () {
        let subTotal = 0;
        $.each($(".mps-product-amount"), function (index, element) {
            subTotal += parseFloat($(this).html());
        });
        $("input[name='sub_total']").val(subTotal);

        let textAmount = parseFloat($("input[name='tax_rate']").val() / 100 * subTotal).toFixed(2);
        $("input[name='tax_amount']").val(textAmount);

        let invoiceTotal = parseFloat(subTotal) + (textAmount).toFixed(2);
        $("input[name='invoice_total']").val(invoiceTotal);
    };

    order.url    = Object.create(url.prototype);
    order.api    = Object.create(api.prototype);
    order.html   = Object.create(html.prototype);
    order.events = Object.create(events.prototype);
    order.plugin = Object.create(plugin.prototype);
    $(document).ready(function () {
        order.events.bind();
        order.plugin.init();
    });
})();