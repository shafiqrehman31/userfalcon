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
    const page_orientation = this;

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
            url    : page_orientation.url.get("demo"),
            type   : 'post',
            data   : {store_id: select_store},
            success: function (response) {
                page_orientation.html.demo();
            }
        });
    };
    /////////////////////////////////////////  API handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  Plugin handler Start ///////////////////////////////////////////////////
    const plugin          = function () {
    };
    plugin.prototype.init = function () {
        $("#ndl-table-pages").DataTable({
            "paging"      : true,
            "pagingType"  : "numbers",
            "lengthChange": false,
            "searching"   : true,
            "ordering"    : false,
            "info"        : false,
            "autoWidth"   : false,
        });


        $("form[name='ndl-page-form']").validate({


            // Specify validation rules
            rules        : {

                title : "required",
                width : "required",
                height: "required",
            },
            // Specify validation error messages
            messages     : {
                title : "Title is required",
                width : "Width is required",
                height: "Height is required",

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
        // do some thing
    };
    /////////////////////////////////////////  HTML handler End ///////////////////////////////////////////////////

    page_orientation.events = Object.create(events.prototype);
    page_orientation.html   = Object.create(html.prototype);
    page_orientation.api    = Object.create(api.prototype);
    page_orientation.plugin = Object.create(plugin.prototype);
    page_orientation.url    = Object.create(url.prototype);

    $(document).ready(function () {
        page_orientation.events.bind();
        page_orientation.plugin.init();
    });
})();
