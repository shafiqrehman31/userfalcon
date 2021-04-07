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
    const font = this;

    /////////////////////////////////////////  Events handler Start ///////////////////////////////////////////////////
    const events = function () {
    };
    events.prototype.bind = function () {

        $(document).on('keyup', '#ndl-search-font', function (e) {

            let value = $(this).val();
            font.api.templateSearch(value);
        });

    };
    /////////////////////////////////////////  Events handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  URL handler Start ///////////////////////////////////////////////////
    const _urls = {
       // "template_searchUrl": app_url + "admin/template1",
    };

    const url = function () {
    };
    url.prototype.get = function (urlFor) {
        return _urls[urlFor];
    };
    /////////////////////////////////////////  URL handler Start ///////////////////////////////////////////////////


    /////////////////////////////////////////  API handler Start ///////////////////////////////////////////////////
    const api = function () {
    };
/*    api.prototype.templateSearch = function (value) {

        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            url: font.url.get("template_searchUrl"),
            // url    : "http://localhost/nextdaylabels_live/admin/public/template",

            type: 'post',
            data: {'search': value},
            success: function (data) {
                //$('#_data').hide();
                $("#ndl-font-table_data").html(data);


            }
        });
    };*/
    /////////////////////////////////////////  API handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  Plugin handler Start ///////////////////////////////////////////////////
    const plugin = function () {
    };
    plugin.prototype.init = function () {
        $("#ndl-table-font").DataTable({
            "paging": true,
            "pagingType": "numbers",
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": false,
            "autoWidth": false,
        });
        // $("#ndl-table-font").DataTable({
        //   "paging"      : false,
        //   "pagingType"  : "numbers",
        //   "lengthChange": false,
        //   "searching"   : true,
        //   "ordering"    : false,
        //   "info"        : false,
        //   "autoWidth"   : false,
        // });

        $("form[name='ndl-font-form']").validate({
            // Specify validation rules
            rules: {
                title: "required",
                regular: "required",
                bold: "required",
                italic: "required",
                bold_italic: "required",
            },
            // Specify validation error messages
            messages: {
                title: "Title is required",
                regular: "Regular is required",
                bold: "Bold is required",
                italic: "Italic is required",
                bold_italic: "Bold Italic is required",

            },
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("form[name='ndl-font-update-form']").validate({


            // Specify validation rules
            rules: {
                title: "required",

            },
            // Specify validation error messages
            messages: {
                title: "Title is required"

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });

        /*$("form[name='ndl-update-font-form']").validate({


            // Specify validation rules
            rules: {
                title: "required",
                template_number: "required",
                design_type_id: "required",
                category_id: "required",
                design_width: "required",
                design_height: "required",
                design_row: "required",
                design_column: "required",
                page_id: "required",
                margin_left: "required",
                margin_right: "required",
                margin_top: "required",
                margin_bottom: "required",
                description: "required",
                color: "required",
            },
            // Specify validation error messages
            messages: {
                title: "Title is required",
                template_number: "Template Number is required",
                design_type_id: "Design Type is required",

                category_id: "Category is required",
                design_width: "Design width is required",
                design_height: " Design height is required",
                design_row: "Design row is required",
                design_column: "Design column is required",
                page_id: "Page is required",
                margin_left: "Margin left is required",
                margin_right: "Margin right is required",
                margin_top: "Margin top is required",
                margin_bottom: "Margin bottom is required",
                description: "Description is required",
                color: "Color is required",

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });*/

    }


    /////////////////////////////////////////  Plugin handler End ///////////////////////////////////////////////////

    /////////////////////////////////////////  HTML handler End ///////////////////////////////////////////////////
    const html = function () {
    };
    html.prototype.demo = function () {
        //console.log(data);

    };
    /////////////////////////////////////////  HTML handler End ///////////////////////////////////////////////////

    font.events = Object.create(events.prototype);
    font.html = Object.create(html.prototype);
    font.api = Object.create(api.prototype);
    font.plugin = Object.create(plugin.prototype);
    font.url = Object.create(url.prototype);

    $(document).ready(function () {
        font.events.bind();
        font.plugin.init();
    });
})();


