/**

 * This file is part of the Monument Designer package

 *

 * (c) Wow Impression Inc. <info@wowimpression.com>

 *

 * PHP version 7.2.13

 *

 * @package     Monument

 * @copyright   2014 monument.com

 * @version     GIT: $Id$ In development. 5.0.0

 */
/**

 * classAccount

 *

 * Handles all API communication

 */

const classAPI = function () {

    // This object
    const api              = this;
    // Environment object. See main.js initClasses()
    api.envObj             = null;
    api.retreiveProductURL = null;
    api.orderListURL       = null;
    api.productFiltersUrl  = null;
    api.storedataUrl       = null;
    api.familydataUrl      = null;
    api.addfamilydataUrl   = null;
    api.addorderdataUrl    = null;
    api.OrderProductUrl    = null;

    /**

     * The init function of the classAPI class

     *

     * @param envObj Environment object. See main.js initClasses()

     */

    api.init = function (envObj) {
        api.envObj = envObj;
        api.initAPI();
    };
    /**

     * Contains any api initiation requirements

     */

    api.initAPI = function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        /* Define paths for each API
        * */
        api.productFiltersUrl  = base_url + "admin/product";
        api.retreiveProductURL = base_url + "admin/product/retreiveproduct";
        api.orderListURL       = base_url + "admin/order";
        api.storedataUrl       = base_url + "admin/storedata";
        api.familydataUrl      = base_url + "admin/familydata";
        api.addfamilydataUrl   = base_url + "admin/addfamilydata";
        api.OrderProductUrl    = base_url + "admin/order/productdata";
        api.addorderdataUrl    = base_url + "admin/order/addorder";
    };


    api.retreiveProductsByPage = function (page) {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            type   : "POST",
            url    : api.retreiveProductURL + "?page=" + page,
            success: function (data) {
                console.log(data);
                //$("nav,ul,.pagination").remove();
                $("#table_data").html(data);
            }
        });
    };

    api.retreiveorderByPage = function (page) {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            type   : "POST",
            url    : api.orderListURL + "?page=" + page,
            success: function (data) {
                console.log(data);
                //$("nav,ul,.pagination").remove();
                $("#mps-ordtable-data").html(data);
            }
        });
    };

    api.productFilters = function () {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });
        $.ajax({
            url    : api.productFiltersUrl,
            method : 'post',
            data   : $('#filter_form').serialize(), // prefer use serialize method
            success: function (data) {
                $('#table_data').html(data);
            }
        });
    }

    api.StoreData = function (select_store) {

        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            url    : api.storedataUrl,
            type   : 'post',
            data   : {store_id: select_store},
            success: function (response) {
                console.log(response);
                $("#store_address").html(response.title + "\n" + response.address);

            }
        });
    }

    api.FamilyData = function (select_family) {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            url    : api.familydataUrl,
            type   : 'post',
            data   : {family_id: select_family},
            success: function (response) {
                //console.log(response);
                $("#family_id").val(response.id);
                $("#name_on_stone").val(response.name_on_stone);
                $("#family_address").val(response.family_address);
                $("#family_city").val(response.family_city);
                $("#family_contact").val(response.family_contact);
                $("#family_phone").val(response.family_phone);


            }
        });


    }

    api.OrderProduct = function (product) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //console.log();
        $.ajax({
            url    : api.OrderProductUrl,
            type   : 'post',
            data   : {product_id: product},
            success: function (response) {
                //console.log(response);
                //ordertable(response);
                OrderedProductHTML(response);
                //$('#order_table > tbody:last-child').append('<tr><td>' + response.id + '</td><td>' + response.number + '</td><td>' + response.title + '</td><td>' + '<input type="num" id="quantity_stocked">'+ '</td><td>' + response.cost + '</td><td>' + quantity * response.cost  + '</td></tr>');

            }
        });
    }


    api.AddFamilyData = function () {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });
        //var form = $("#add_family_form1").serialize();
        //alert($("#add_family_form1").serialize());
        //console.log();

        var name_on_stone  = $('#name_on_stone').val();
        var family_id      = $('#family_id').val();
        var family_address = $('#family_address').val();
        var family_city    = $('#family_city').val();
        var family_contact = $('#family_contact').val();
        var family_phone   = $('#family_phone').val();

        $.ajax({
            url: api.addfamilydataUrl,

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
                //console.log(url);
                //console.log(data);
            }
        });
    }


    // api.AddOrderData = function(){
    //     $.ajaxSetup({
    //         headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
    //     });
    //     var form = $("#order_form").serialize();
    //     //alert($("#add_family_form1").serialize());
    //     //console.log();


    //     $.ajax({
    //         url: api.addorderdataUrl,

    //         method: 'post',
    //         data:form, // prefer use serialize method

    //         success: function (data) {
    //             //console.log(url);
    //             //console.log(data);
    //         }
    //     });
    // }

};
