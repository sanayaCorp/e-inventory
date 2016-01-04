<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * @package     E-Inventory App v1.0.0 (http://sanayaCorp.github.com/e-inventory)
 * @author      Afes Oktavianus (revisoft783@gmail.com)
 * @copyright   Copyright (c) 2016 E-Inventory, Afes Oktavianus
 * @license     MIT (https://github.com/sanayaCorp/e-inventory/blob/master/LICENSE)
 * @subpackage  Biform
 * @category    Configurations
 */

/*
|--------------------------------------------------------------------------
| Form template
|--------------------------------------------------------------------------
*/

$config['biform_template']  = array(
    'group_open'    => "<div class='%s' %s>",
    'group_close'   => "</div>",
    'group_class'   => "form-group",
    'label_open'    => "<label class='%s' %s>",
    'label_close'   => "</label>",
    'label_class'   => "control-label",
    'label_col_lg'  => 3,
    'label_col_md'  => 3,
    'label_col_sm'  => 4,
    'label_col_xs'  => 12,
    'field_open'    => "<div class='%s' %s>",
    'field_close'   => "</div>",
    'field_class'   => "form-control input",
    'field_col_lg'  => 9,
    'field_col_md'  => 9,
    'field_col_sm'  => 8,
    'field_col_xs'  => 12,
    'buttons_class' => "btn",
    'required_attr' => " <abbr title='Field ini harus diisi'>*</abbr>",
    'desc_open'     => "<span class='help-block'>",
    'desc_close'    => "</span>",
    );


/* End of file biform.php */
/* Location: ./bootigniter/config/biform.php */
