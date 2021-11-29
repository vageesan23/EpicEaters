<?php
define('DS', DIRECTORY_SEPARATOR);
$GLOBALS['db'] = file_get_contents('..' . DS . '..' . DS . 'common' . DS . 'db.json');
$GLOBALS['sodb'] = file_get_contents('..' . DS . '..' . DS . 'common' . DS . 'sodb.json');
$GLOBALS['stripe_key'] = "API_KEY_HERE";
$GLOBALS['domain'] = "http://localhost/Made-in-Srilanka/";
if (!isset($_COOKIE['diamondCount'])) {
    setcookie('diamondCount', 10, time() + (86400 * 30), "/");
}
if (!isset($_COOKIE['userName'])) {
    setcookie('userName', 'Snoopy', time() + (86400 * 30), "/");
}
setcookie('sortDb', 'db', time() + (86400 * 30), "/");
