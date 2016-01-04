<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * @package     E-Inventory App v1.0.0 (http://sanayaCorp.github.com/e-inventory)
 * @author      Afes Oktavianus (revisoft783@gmail.com)
 * @copyright   Copyright (c) 2016 E-Inventory, Afes Oktavianus
 * @license     MIT (https://github.com/sanayaCorp/e-inventory/blob/master/LICENSE)
 * @subpackage  Biform
 * @category    Configurations
 */
 
 // -----------------------------------------------------------------------------

function _parse_data_attr( $string )
{
    $output = '';

    if ( strpos($string, ',') !== FALSE )
    {
        foreach ( explode(',', $string) as $data )
        {
            $output .= _parse_data_attr( $data );
        }
    }
    else
    {
        $output .= ' data-'.$string;
    }

    return $output;
}

// -----------------------------------------------------------------------------

function add_placeholder( $array, $placeholder = '---', $langify = FALSE )
{
    $output[''] = $placeholder;

    foreach( $array as $key => $value )
    {
        $output[$key] = ( $langify ? _x( $value ) : $value );
    }

    return $output;
}

// -----------------------------------------------------------------------------

function form_persyaratan( $caption, $persyaratan = array(), $syarats = '' )
{
    $values = $syarats != '' ? unserialize($syarats) : array();

    if (is_array($persyaratan) && count($persyaratan) > 0)
    {
        $output  = form_fieldset($caption);
        $output .= "<div id=\"control_input_syarat_pengajuan\" class=\"control-group\">\n\t";
        $output .= form_hidden( 'total_syarat', count($persyaratan));
        $output .= form_label( 'Persyaratan', 'input_syarat_pengajuan', array('class'=>'control-label'));
        $output .= "\n\t<div class=\"controls\">";

        foreach ($persyaratan as $id => $syarat)
        {
            $output .= form_label( form_checkbox(array('name'=>'surat_syarat[]','id'=>'input_syarat_'.$id,'value'=>$id,'checked'=>in_array($id, $values))).' '.$syarat, 'input_syarat_'.$id, array('class'=>'checkbox'));
        }

        $output .= "\n\t</div>\n</div>";
        $output .= form_fieldset_close();

        return $output;
    }
}

/* End of file former_helper.php */
/* Location: ./bootigniter/helpers/former_helper.php */
