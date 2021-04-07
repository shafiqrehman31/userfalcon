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
    const shape = this;

    /////////////////////////////////////////  Events handler Start ///////////////////////////////////////////////////
    const events          = function () {
    };
    events.prototype.bind = function () {

    };
    /////////////////////////////////////////  Events handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  URL handler Start ///////////////////////////////////////////////////
    const _urls = {
        "demo": admin_url + "demo",
    };

    const url         = function () {
    };
    url.prototype.get = function (urlFor) {
        return _urls[urlFor];
    };
    /////////////////////////////////////////  URL handler Start ///////////////////////////////////////////////////


    /////////////////////////////////////////  API handler Start ///////////////////////////////////////////////////
    const api          = function () {
    };
    api.prototype.demo = function () {
        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            url    : shape.url.get("demo"),
            type   : 'post',
            data   : {store_id: select_store},
            success: function (response) {
                shape.html.demo();
            }
        });
    };
    /////////////////////////////////////////  API handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  Plugin handler Start ///////////////////////////////////////////////////
    const plugin          = function () {
    };
    plugin.prototype.init = function () {
        $("#ndl-shape-categories").DataTable({
            "paging"      : true,
            "pagingType"  : "numbers",
            "lengthChange": false,
            "searching"   : true,
            "ordering"    : false,
            "info"        : false,
            "autoWidth"   : false,
        });
        $("#ndl-table-shapes").DataTable({
            "paging"      : true,
            "pagingType"  : "numbers",
            "lengthChange": false,
            "searching"   : true,
            "ordering"    : false,
            "info"        : false,
            "autoWidth"   : false,
        });

        $("form[name='ndl-shape-category-form']").validate({
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

        $("form[name='ndl-shape-form']").validate({


            // Specify validation rules
            rules        : {

                title      : "required",
                shape_image: "required",
                category_id: "required",

            },
            // Specify validation error messages
            messages     : {
                title      : "Title is required",
                shape_image: "Shape Image is required",
                category_id: "Category is required",


            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("form[name='ndl-update-shape-form']").validate({


            // Specify validation rules
            rules        : {

                title      : "required",
                category_id: "required",
            },
            // Specify validation error messages
            messages     : {
                title      : "Title is required",
                category_id: "Category is required",

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });
    };
    /////////////////////////////////////////  Plugin handler End ///////////////////////////////////////////////////

    /////////////////////////////////////////  HTML handler End ///////////////////////////////////////////////////
    const html          = function () {
    };
    html.prototype.demo = function () {
        // do some thing
    };
    /////////////////////////////////////////  HTML handler End ///////////////////////////////////////////////////

    shape.events = Object.create(events.prototype);
    shape.html   = Object.create(html.prototype);
    shape.api    = Object.create(api.prototype);
    shape.plugin = Object.create(plugin.prototype);
    shape.url    = Object.create(url.prototype);

    $(document).ready(function () {
        shape.events.bind();
        shape.plugin.init();
    });
})();
