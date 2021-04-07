/**

 * This file is part of the Monument Designer package

 *

 *

 *

 * PHP version 7.2.13  *

 * @package     Monument

 * @copyright   2014 monument.com
 * @version     GIT: $Id$ In development. 5.0.0

 */
/**

 * Main JS

 *

 * Main Javascript file for connecting all functions and handlers

 */
/**

 * Initiate our entire environment by calling initEnv.init()

 */
let globalObj;
jQuery(document).ready(function () {
    var initObj = new initEnv();
    initObj.init();
    globalObj = initObj;
});
/**

 * Load our Javascript/jQuery environment and all its necessities

 */

    // alert("Site is under development. Don't test anymore");
const initEnv = function () {
        const main           = this;
        main.apiObj          = null;
        main.htmlObj         = null;
        main.eventHandlerObj = null;
        main.formObj         = null;

        /**
         * The init function of our main initEnv class
         */
        main.init = function () {
            main.initClasses();
        };

        /**
         * Init all our required classes
         */
        main.initClasses = function () {
            // Init api class
            main.apiObj = new classAccount();
            main.apiObj.init(main);

            // Init eventHandlerObj class
            main.eventHandlerObj = new classEventHandler();
            main.eventHandlerObj.init(main);


            // Init our html dom class
            main.htmlObj = new classHTML();
            main.htmlObj.init(main);

            // Init form Validation class
            main.formObj = new classForm();
            main.formObj.init(main);
        };
    };
