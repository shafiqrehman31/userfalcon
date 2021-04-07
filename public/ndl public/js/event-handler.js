/**
 * This file is part of the Monument Designer package

 *

 *

 *

 * PHP version 7.2.13

 *

 * @package     Monument

 * @copyright   2014 monument.com

 * @version     1.0.0

 */
/**
 * classAccount

 *

 * Handles all event relationship trigger and action calls. This is the main

 * router for button events.

 */

const classEventHandler = function () {
    // This object
    const eventHandler  = this;
    eventHandler.envObj = null;


    /**
     * The init function of the classEventHandler class
     * @param envObj Environment object. See main.js initClasses()
     */
    eventHandler.init = function (envObj) {
        eventHandler.envObj = envObj;
        eventHandler.initEventHandler();
    };
    /**
     * Button event relation handling and routing

     */

    eventHandler.initEventHandler = function () {

        /*product pagination*/
        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            eventHandler.envObj.apiObj.retreiveProductsByPage(page);
        });

        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            eventHandler.envObj.apiObj.retreiveorderByPage(page);
        });

        $(document).on('click', '#filter', function (e) {
            e.preventDefault();
            eventHandler.envObj.apiObj.productFilters();
        });
        $(document).on('click', '#mps-family-form-button', function (e) {
            //console.log('eventHandler called');
            //$('#add_family_form1').submit();
            e.preventDefault();

            eventHandler.envObj.apiObj.AddFamilyData();
        });

        $(document).on('change', '#select_store', function (e) {
            let select_store = $(this).val();
            e.preventDefault();
            eventHandler.envObj.apiObj.StoreData(select_store);
        });
        $(document).on('change', '#mps-select-family', function (e) {
            let select_family = $(this).val();
            e.preventDefault();
            eventHandler.envObj.apiObj.FamilyData(select_family);
        });
        $(document).on('change', '.SelectProduct', function (e) {
            var product = $(this).val();
            e.preventDefault();
            eventHandler.envObj.apiObj.OrderProduct(product);
        });


        $(document).on('change', '.mps-product-quantity', function () {
            const quantity = $(this).val();
            const thisRow  = $(this).parents(".mps-product-row");
            const price    = thisRow.find(".mps-product-price").val();
            thisRow.find(".mps-product-amount").html(quantity * price);
        });


        $(document).on('change', '.mps-product-price', function () {
            const price    = $(this).val();
            const thisRow  = $(this).parents(".mps-product-row");
            const quantity = thisRow.find(".mps-product-quantity").val();

            thisRow.find(".mps-product-amount").html(quantity * price);
        });
    };

};
