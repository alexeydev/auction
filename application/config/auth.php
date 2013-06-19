<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

    'driver'       => 'ORM',
   'hash_method'  => 'sha256',

    'hash_key'     => 'seilrrskj34sljusd',
    'lifetime'     => 1209600,
    'session_type' => Session::$default,
    'session_key'  => 'auth_user',

    'users' => array()

);