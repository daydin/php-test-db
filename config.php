<?php

// set the information in the INI file to "true"
ini_set('session.use_only_cookies',1);
// makes it harder to guess your session ID
ini_set('session.use_strict_mode',1);

// create some cookie params, like timeout of 3 mins, domain, path from root, use https (secure), httponly restricts script access from inside the browser
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

// this makes a basic ID, not secure enough
session_start();

session_regenerate_id(true);

if (!isset($_SESSION['last_regeneration'])){
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time;
} else {
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] >= $interval){
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}
