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
    const design = this;

    /////////////////////////////////////////  Events handler Start ///////////////////////////////////////////////////
    const events          = function () {
    };
    events.prototype.bind = function () {

        $(document).on('keyup', '#ndl-search-design', function (e) {

            let value = $(this).val();
            if(!value) {
                window.location.href = app_url + "admin/design";
            }else{
                design.api.designSearch(value);
            }


        });

    };
    /////////////////////////////////////////  Events handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  URL handler Start ///////////////////////////////////////////////////
    const _urls = {
        "demo"            : app_url + "demo",
        "design_searchUrl": app_url + "admin/design-search",

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
            url    : design.url.get("demo"),
            type   : 'post',
            data   : {store_id: select_store},
            success: function (response) {
                design.html.demo();
            }
        });
    };

    api.prototype.designSearch = function (value) {

        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
        });

        $.ajax({
            url    : design.url.get("design_searchUrl"),
            type   : 'post',
            data   : {'search': value},
            success: function (data) {

                    $("#ndl-table-designed").html(data);




            }
        });
    };
    /////////////////////////////////////////  API handler End ///////////////////////////////////////////////////


    /////////////////////////////////////////  Plugin handler Start ///////////////////////////////////////////////////
    const plugin          = function () {
    };
    plugin.prototype.init = function () {
        $("#ndl-table-design-type").DataTable({
            "paging"      : true,
            "pagingType"  : "numbers",
            "lengthChange": false,
            "searching"   : true,
            "ordering"    : false,
            "info"        : false,
            "autoWidth"   : false,
        });
        // $("#ndl-table-designed").DataTable({
        //   "paging"      : false,
        //   "pagingType"  : "numbers",
        //   "lengthChange": false,
        //   "searching"   : true,
        //   "ordering"    : false,
        //   "info"        : false,
        //   "autoWidth"   : false,
        // });
        $("#ndl-table-designed-categories").DataTable({
            "paging"      : true,
            "pagingType"  : "numbers",
            "lengthChange": false,
            "searching"   : true,
            "ordering"    : false,
            "info"        : false,
            "autoWidth"   : false,
        });

        $("form[name='ndl-design-category-form']").validate({
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
        $("form[name='ndl-design-type-form']").validate({
            // Specify validation rules
            rules        : {
                title            : "required",
                image_area_path  : "required",
                boundary_path    : "required",
                printed_area_path: "required",
            },
            // Specify validation error messages
            messages     : {
                title            : "Title is required",
                image_area_path  : "Image area path is required",
                boundary_path    : "Bundary path is required",
                printed_area_path: "Printed area path is required",

            },
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("form[name='ndl-design-form']").validate({
            // Specify validation rules
            rules        : {
                title      : "required",
                category_id: "required",
                template_id: "required",
                keywords   : "required",
            },
            // Specify validation error messages
            messages     : {
                title      : "Title is required",
                preview    : "Image is required",
                category_id: "Category is required",
                template_id: "Template number is required",
                keywords   : "Keywords is required",

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        $("form[name='ndl-design-update-form']").validate({
            // Specify validation rules
            rules        : {
                title      : "required",
                category_id: "required",
                template_id: "required",
                keywords   : "required",
            },
            // Specify validation error messages
            messages     : {
                title      : "Title is required",
                category_id: "Category is required",
                template_id: "Template number is required",
                keywords   : "Keywords is required",
            },
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

    design.events = Object.create(events.prototype);
    design.html   = Object.create(html.prototype);
    design.api    = Object.create(api.prototype);
    design.plugin = Object.create(plugin.prototype);
    design.url    = Object.create(url.prototype);

    $(document).ready(function () {
        design.events.bind();
        design.plugin.init();
    });
})();
