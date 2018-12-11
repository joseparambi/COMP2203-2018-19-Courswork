<?php

/**
 * This code shows the predispatch php file which has the parameters defined in order to call the classes
 *
 * loads the relevant classes when the autoloader is called upon
 *
 *
 * @author Jose Parambi
 */

session_start();


// Class autoloader
function __autoload($class) {
    // Check that the class file exists.
    if(file_exists("classes/$class.class.php")) {
        // If it does, require_once() the class file.
        require_once("classes/$class.class.php");
    }
}