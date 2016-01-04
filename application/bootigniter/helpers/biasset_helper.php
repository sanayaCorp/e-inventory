<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * @package     E-Inventory App v1.0.0 (http://sanayaCorp.github.com/e-inventory)
 * @author      Afes Oktavianus (revisoft783@gmail.com)
 * @copyright   Copyright (c) 2016 E-Inventory, Afes Oktavianus
 * @license     MIT (https://github.com/sanayaCorp/e-inventory/blob/master/LICENSE)
 * @subpackage  Biasset
 * @category    Configurations
 */

// -----------------------------------------------------------------------------

function get_scripts()
{
    $biasset =& get_instance()->biasset;

    return $biasset->get_loaded('scripts');
}

// -----------------------------------------------------------------------------

function get_styles()
{
    $biasset =& get_instance()->biasset;

    return $biasset->get_loaded('styles');
}

// -----------------------------------------------------------------------------

function load_script($id, $src = '', $ver = '', $dep = array())
{
    $biasset =& get_instance()->biasset;

    $biasset->load_script($id, $src, $ver, $dep);
}

// -----------------------------------------------------------------------------

function load_style($id, $src = '', $ver = '', $dep = array())
{
    $biasset =& get_instance()->biasset;

    $biasset->load_style($id, $src, $ver, $dep);
}


/* End of file biasset_helper.php */
/* Location: ./bootigniter/helpers/biasset_helper.php */
