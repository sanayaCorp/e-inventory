<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * @package     E-Inventory App v1.0.0 (http://sanayaCorp.github.com/e-inventory)
 * @author      Afes Oktavianus (revisoft783@gmail.com)
 * @copyright   Copyright (c) 2016 E-Inventory, Afes Oktavianus
 * @license     MIT (https://github.com/sanayaCorp/e-inventory/blob/master/LICENSE)
 * @subpackage  Biauth
 * @category    Configurations
 */

/*
|--------------------------------------------------------------------------
| Table name configurations
|--------------------------------------------------------------------------
*/

// Biauth users table name
$config['biauth_users_table']           = 'auth_users';

// Biauth user_meta table name
$config['biauth_user_meta_table']       = 'auth_usermeta';

// Biauth user_group table name
$config['biauth_user_group_table']      = 'auth_usergroups';

// Biauth user_meta table name
$config['biauth_groups_table']          = 'auth_groups';

// Biauth user_permission table name
$config['biauth_permissions_table']     = 'auth_permissions';

// Biauth user_permission table name
$config['biauth_group_perms_table']     = 'auth_groupperms';

// Biauth user_permission table name
$config['biauth_overrides_table']       = 'auth_overrides';

// Biauth users table name
$config['biauth_autologin_table']       = 'auth_autologin';

// Biauth users table name
$config['biauth_login_attempts_table']  = 'auth_loginattempts';

/*
|--------------------------------------------------------------------------
| Biauth settings
|--------------------------------------------------------------------------
*/

// Cookie setting
$config['biauth_autologin_cookie_name'] = 'bi_autologin';
$config['biauth_autologin_cookie_life'] = 86400;

// PHPASS-0.3 Setting
$config['biauth_hash_portable'] = FALSE;
$config['biauth_hash_strength'] = 8;

// User request setting
$config['biauth_request_life'] = 172800;
$config['biauth_request_email'] = array('activation', 'change_email', 'change_pass');
$config['biauth_request_email_activation'] = FALSE;
$config['biauth_request_email_change_email'] = TRUE;
$config['biauth_request_email_change_pass'] = TRUE;


/* End of file biauth.php */
/* Location: ./bootigniter/config/biauth.php */
