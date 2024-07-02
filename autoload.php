<?php

/**
 * This function is responsible for loading all the classes
 * @param string $className
 */
function my_autoloader($className) {
    $firstLetter = $className[0];
    switch ($firstLetter) {
        case 'E':
            include_once('/membri/ufficiale/Entity/'. $className . '.php' );
            break;

        case 'F':
            include_once('/membri/ufficiale/Foundation/' . $className . '.php' );
            break;

        case 'V':
            include_once('/membri/ufficiale/View/'. $className . '.php' );
            break;

        case 'C':
            include_once('/membri/ufficiale/Controller/'. $className . '.php' );
            break;

        case 'U':
            include_once ('/membri/ufficiale/Utility/'. $className. '.php');
            break;
    }
}

/**
 * Register the autoloader
 */
spl_autoload_register('my_autoloader');