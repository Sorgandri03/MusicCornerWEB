<?php

/**
 * This function is responsible for loading all the classes
 * @param string $className
 */
function my_autoloader($className) {
    $firstLetter = $className[0];
    switch ($firstLetter) {
        case 'E':
            include_once('/membri/musiccorner/Entity/'. $className . '.php' );
            break;

        case 'F':
            include_once('/membri/musiccorner/Foundation/' . $className . '.php' );
            break;

        case 'V':
            include_once('/membri/musiccorner/View/'. $className . '.php' );
            break;

        case 'C':
            include_once('/membri/musiccorner/Controller/'. $className . '.php' );
            break;

        case 'U':
            include_once ('/membri/musiccorner/Utility/'. $className. '.php');
            break;
    }
}

/**
 * Register the autoloader
 */
spl_autoload_register('my_autoloader');