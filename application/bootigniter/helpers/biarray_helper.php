<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * @package     E-Inventory App v1.0.0 (http://sanayaCorp.github.com/e-inventory)
 * @author      Afes Oktavianus (revisoft783@gmail.com)
 * @copyright   Copyright (c) 2016 E-Inventory, Afes Oktavianus
 * @license     MIT (https://github.com/sanayaCorp/e-inventory/blob/master/LICENSE)
 * @subpackage  Biarray
 * @category    Configurations
 */

// -----------------------------------------------------------------------------

/**
 * Converting an array into object
 *
 * @param   array   $array  Source
 * @return  object
 */
function array_to_object( array $array )
{
    $obj = new stdClass;

    foreach ( $array as $key => $val )
    {
        $obj->$key = ( is_array( $val ) ? array_to_object( $val ) : $val );
    }

    return $obj;
}

// -------------------------------------------------------------------------

function is_array_assoc( array $array ) {
    $array = array_keys($array);
    $array = array_filter($array, 'is_string');

    return (bool) count($array);
}

// -------------------------------------------------------------------------

/**
 * Set default keys in an array, it's useful to prevent unseted array keys
 * but you'd use that in next code.
 *
 * @param   array  $field       An array that will recieve default key
 * @param   array  $defaults    Array of keys which be default key of $field
 *                              Array must be associative array, which have
 *                              key and value. Key used as default key and
 *                              Value used as default value for $field param
 *
 * @return  array
 */
function array_set_defaults(array $array, array $defaults)
{
    foreach ($defaults as $key => $val)
    {
        if (!array_key_exists($key, $array) AND !isset($array[$key]))
        {
            $array[$key] = $val;
        }
    }

    return $array;
}

/* End of file biarray_helper.php */
/* Location: ./bootigniter/helpers/biarray_helper.php */
