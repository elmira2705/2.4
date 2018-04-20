<?php
session_start();
define('USER', 'admin');
define('PASS', 'pass');
$login = $_POST('login');
$password = $_POST('password');

if(!empty($_SERVER['PHP_AUTH_USER']) && !empty($_SERVER['PHP_AUTH_PW'])) {
    if (USER == $_SERVER['PHP_AUTH_USER'] && PASS == $_SERVER['PHP_AUTH_PW']) {
        echo 'Привет, ' . USER;
    }
};
if(!empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW'])) {
        echo 'Привет, ' . USER . 'Вы вошли как гость.';
    }
}
header('WWW-Authenticate: Basic realm="myRealm"');
$_SESSION['admin'] = 1;
