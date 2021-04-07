/**
 * This file is part of the Monument
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
 * classHTML
 *
 * Handles all HTML Dom manipulation
 */
const classHTML = function () {
    // This object
    const html  = this;
    // Environment object. See main.js initClasses()
    html.envObj = null;

    /**

     * The init function of the class

     *

     * @param envObj Environment object. See main.js initClasses()

     */

    html.init = function (envObj) {
        html.envObj = envObj;
        html.initHTML();
    };
    /**

     * Contains any html initiation requirements

     */


    OrderedProductHTML = function (response) {
        let html = '<tr class="mps-product-row">' +
            '<td>' + response.id + '</td>' +
            '<td>' + response.number + '</td>' +
            '<td>' + response.title + '</td>' +
            '<td>' + '<input type="number" min="1"  style="width:50px"  class="mps-product-quantity" value="1"></td>' +
            '<td><input type="text" class="mps-product-price" style="width:50px" id="product_price" value="' + response.cost + '"></td>' +
            '<td class="mps-product-amount">' + response.cost + '</td>' +
            +'</tr>';

        $('#order_table > tbody:last-child').append(html);
    };

    html.triggerOrderPrices = function () {
        let subTotal = 0;
        $.each($(".mps-product-amount"), function (index, element) {
            subTotal += parseFloat($(this).html());
        });
        $("input[name='sub_total']").val(sub_total);

        let textAmount = ($("input[name='tax_rate']").val() * subTotal).toFixed(2);
        $("input[name='tax_amount']").val(textAmount);

        let invoiceTotal = subTotal + textAmount;
        $("input[name='invoice_total']").val(textAmount);
    };

    html.initHTML = function () {
    };
};
