<?php
/**
 * Utilities
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */


/**
 * Output an array in human readable format
 */
function pretty_print($array = array()) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
