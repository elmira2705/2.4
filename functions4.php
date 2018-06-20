<?php
session_start();
function login($name)
{
    $user = getUser($name);
    if ($user == $name) {
        $_SESSION['name'] = $user;
        return true;
    }
    return false;
}
function getUser($name)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['name'] == $name) {
            return $user;
        }
    }
    return null;
}
function getUsers()
{
    $usersData = file_get_contents(__DIR__ . '/data/users.json');
    if (!$usersData) {
        return [];
    }
    $users = json_decode($usersData, true);
    if (!$users) {
        return [];
    }
    return $users;
}
function isAuthorized()
{
    return !empty($_SESSION['name']);
}
function isAdmin()
{
    return $_SESSION['name']['is_admin'];
}
function redirect($page)
{
    header("Location: $page.php");
    die;
}
