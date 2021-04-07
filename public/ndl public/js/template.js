/**
 * Created by Refaqat on 18/03/2020.
 */
/**
 * Created by Refaqat on 18/03/2020.
 */
/**
 * This file is part of the NextDayLabel
 *
 * jQuery version 3.4.1
 *
 * @package     NextDayLabel
 * @copyright   2020 nextdaylabel.com
 * @version     1.0.0
 */
/**
 * class User
 *
 * Handles all admin Design page's JS
 */
(function () {
    const template = this;

    /////////////////////////////////////////  Events handler Start ///////////////////////////////////////////////////
    const events          = function () {
    };
    events.prototype.bind = function () {

        $(document).on('keyup', '#ndl-search-template', function (e) {

            let value = $(this).val();
            template.api.templateSearch(value);
        });

        /*$(document).on('change', '#ndl-shop', function () {
            const action = ($(this).val() != "")? "show" : "hide";
            $(".ndl-shop-div")[action]("slow");
        });*/

        $(document).on('change', '#ndl-shop', function () {
            $selected_value = $('#ndl-shop option:selected').text();

            let shopID = $(this).val();
            if(shopID !="" && $selected_value !="Select Shop") {
                template.api.getShopByID(shopID)
            }
        });

        $(document).on('click', '.mps-delete-shop', function () {
            $(this).closest(".ndl-template-row").remove();
        });

    };
    /////////////////////////////////////////  Events handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  URL handler Start ///////////////////////////////////////////////////
    const _urls = {
        "template_searchUrl": app_url + "admin/template1",
        "shopUrl": app_url + "admin/shop-by-id",
    };

    const url         = function () {
    };
    url.prototype.get = function (urlFor) {
        return _urls[urlFor];
    };
    /////////////////////////////////////////  URL handler Start ///////////////////////////////////////////////////


    /////////////////////////////////////////  API handler Start ///////////////////////////////////////////////////
    const api                    = function () {
    };
    api.prototype.templateSearch = function (value) {

        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            url: template.url.get("template_searchUrl"),
            // url    : "http://localhost/nextdaylabels_live/admin/public/template",

            type   : 'post',
            data   : {'search': value},
            success: function (data) {
                //$('#_data').hide();
                $("#ndl-template-table_data").html(data);


            }
        });
    };
    api.prototype.getShopByID = function (value) {

        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            url: template.url.get("shopUrl"),
            type   : 'post',
            data   : {'id': value},
            success: function (data) {
                //data = JSON.parse(data);
                //$(this).//first find its parent
                template.html.addtemplateRow(data);

                //$(".ndl-shop-title").val(data.title);

            }
        });
    };
    /////////////////////////////////////////  API handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  Plugin handler Start ///////////////////////////////////////////////////
    const plugin          = function () {
    };
    plugin.prototype.init = function () {
        $("#ndl-table-template-categories").DataTable({
            "paging"      : true,
            "pagingType"  : "numbers",
            "lengthChange": false,
            "searching"   : true,
            "ordering"    : false,
            "info"        : false,
            "autoWidth"   : false,
        });
        // $("#ndl-table-template").DataTable({
        //   "paging"      : false,
        //   "pagingType"  : "numbers",
        //   "lengthChange": false,
        //   "searching"   : true,
        //   "ordering"    : false,
        //   "info"        : false,
        //   "autoWidth"   : false,
        // });

        $("form[name='ndl-template-category-form']").validate({
            // Specify validation rules
            rules        : {
                title: "required",
            },
            // Specify validation error messages
            messages     : {
                title: "Title is required"

            },
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("form[name='ndl-template-form']").validate({


            // Specify validation rules
            rules        : {
                title          : "required",
                template_number: "required",
                design_type_id : "required",
                preview        : "required",
                category_id    : "required",
                design_width   : "required",
                design_height  : "required",
                design_row     : "required",
                design_column  : "required",
                page_id        : "required",
                margin_left    : "required",
                margin_right   : "required",
                margin_top     : "required",
                margin_bottom  : "required",
                description    : "required",
                color          : "required",
            },
            // Specify validation error messages
            messages     : {
                title          : "Title is required",
                template_number: "Template Number is required",
                design_type_id : "Design Type is required",
                preview        : "Image is required",
                category_id    : "Category is required",
                design_width   : "Design width is required",
                design_height  : " Design height is required",
                design_row     : "Design row is required",
                design_column  : "Design column is required",
                page_id        : "Page is required",
                margin_left    : "Margin left is required",
                margin_right   : "Margin right is required",
                margin_top     : "Margin top is required",
                margin_bottom  : "Margin bottom is required",
                description    : "Description is required",
                color          : "Color is required",

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("form[name='ndl-update-template-form']").validate({


            // Specify validation rules
            rules        : {
                title          : "required",
                template_number: "required",
                design_type_id : "required",
                category_id    : "required",
                design_width   : "required",
                design_height  : "required",
                design_row     : "required",
                design_column  : "required",
                page_id        : "required",
                margin_left    : "required",
                margin_right   : "required",
                margin_top     : "required",
                margin_bottom  : "required",
                description    : "required",
                color          : "required",
            },
            // Specify validation error messages
            messages     : {
                title          : "Title is required",
                template_number: "Template Number is required",
                design_type_id : "Design Type is required",

                category_id  : "Category is required",
                design_width : "Design width is required",
                design_height: " Design height is required",
                design_row   : "Design row is required",
                design_column: "Design column is required",
                page_id      : "Page is required",
                margin_left  : "Margin left is required",
                margin_right : "Margin right is required",
                margin_top   : "Margin top is required",
                margin_bottom: "Margin bottom is required",
                description  : "Description is required",
                color        : "Color is required",

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });

    }


    /////////////////////////////////////////  Plugin handler End ///////////////////////////////////////////////////

    /////////////////////////////////////////  HTML handler End ///////////////////////////////////////////////////
    const html          = function () {
    };
    html.prototype.demo = function () {
        //console.log(data);

    };
    html.prototype.addtemplateRow = function (Data) {
          let html;

             html = '<div class="row ndl-template-row"><div class="col-sm-5">' +
                 '<div class="form-group">' +
                 '<input type="hidden" name="shop_fid[]" value="' + Data.id + '" readonly>' +
                 '<input type="text" name="title" class="form-control" value="' + Data.title + '" readonly></div>' +
                 '</div>' +
                '<div class="col-sm-6"><div class="form-group"><input type="text" name="shop_link[]" class="form-control"  placeholder="Enter Purchasing Link" value="">'+
                '</div></div><div class="col-sm-1"><button type="button" class="close mps-delete-shop"> <span aria-hidden="true">×</span> </button></div></div>';
        $('#ndl-shop-row').append(html);
    };
    /////////////////////////////////////////  HTML handler End ///////////////////////////////////////////////////

    template.events = Object.create(events.prototype);
    template.html   = Object.create(html.prototype);
    template.api    = Object.create(api.prototype);
    template.plugin = Object.create(plugin.prototype);
    template.url    = Object.create(url.prototype);

    $(document).ready(function () {
        template.events.bind();
        template.plugin.init();

       /* const isShop = ($(".ndl-shop").val() != "")? "show" : "hide";
        $(".ndl-shop-div")[isShop]("slow");*/

    });
})();


