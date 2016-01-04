<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * @package     E-Inventory App v1.0.0 (http://sanayaCorp.github.com/e-inventory)
 * @author      Afes Oktavianus (revisoft783@gmail.com)
 * @copyright   Copyright (c) 2016 E-Inventory, Afes Oktavianus
 * @license     MIT (https://github.com/sanayaCorp/e-inventory/blob/master/LICENSE)
 * @subpackage  Biauth
 * @category    Configurations
 */

// -------------------------------------------------------------------------
// Login helper
// -------------------------------------------------------------------------

/**
 * Get login method
 *
 * @return  string
 */
function login_by()
{
    $login_by_username  = ( (bool) Bootigniter::get_setting('auth_login_by_username') AND (bool) Bootigniter::get_setting('auth_use_username') );
    $login_by_email     = (bool) Bootigniter::get_setting('auth_login_by_email');

    if ( $login_by_username AND $login_by_email )
    {
        return 'login';
    }
    else if ( $login_by_username )
    {
        return 'username';
    }
    else
    {
        return 'email';
    }
}

// -------------------------------------------------------------------------
// Permission helper
// -------------------------------------------------------------------------

/**
 * Get login method
 *
 * @return  string
 */

function is_user_can( $permission )
{
    $biauth =& get_instance()->biauth;

    return $biauth->current_user_can( $permission );
}

// -------------------------------------------------------------------------
// Cookie helper
// -------------------------------------------------------------------------

function biauth_set_cookie($user_id, $key)
{
    set_cookie(array(
        'name'   => (config_item('biauth_autologin_cookie_name') ?: 'autologin'),
        'value'  => serialize(array('user_id' => $user_id, 'key' => $key)),
        'expire' => (config_item('biauth_autologin_cookie_life') ?: config_item('sess_expiration'))
        ));
}

// -------------------------------------------------------------------------

function biauth_get_cookie()
{
    $cookie_name = config_item('biauth_autologin_cookie_name') ?: 'autologin';

    return unserialize(get_cookie($cookie_name, TRUE));
}

// -------------------------------------------------------------------------
// String helper
// -------------------------------------------------------------------------

/**
 * Generate a random string based on kernel's random number generator
 *
 * @return string
 */
function biauth_keygen()
{
    if (function_exists('openssl_random_pseudo_bytes'))
    {
        $key = openssl_random_pseudo_bytes(1024, $cstrong).microtime().mt_rand();
    }
    else
    {
        $randomizer = file_exists('/dev/urandom') ? '/dev/urandom' : '/dev/random';
        $key = file_get_contents($randomizer, NULL, NULL, 0, 1024).microtime().mt_rand();
    }

    return md5($key);
}

/* End of file authen_helper.php */
/* Location: ./bootigniter/helpers/authen_helper.php */
