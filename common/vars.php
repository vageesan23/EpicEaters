<?php
define('DS', DIRECTORY_SEPARATOR);
$GLOBALS['db'] = file_get_contents('..' . DS . '..' . DS . 'common' . DS . 'db.json');
$GLOBALS['sodb'] = file_get_contents('..' . DS . '..' . DS . 'common' . DS . 'sodb.json');
$GLOBALS['stripe_key'] = "API_KEY_HERE";
$GLOBALS['domain'] = "http://localhost/epiceaters/";

if (!isset($_COOKIE['coinCount'])) {
    setcookie('coinCount', 10, time() + (86400 * 30), "/");
}

if (!isset($_COOKIE['userName'])) {
    setcookie('userName', 'Smith', time() + (86400 * 30), "/");
}
setcookie('sortDb', 'db', time() + (86400 * 30), "/");
