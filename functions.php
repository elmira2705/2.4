<?php

function login($login, $password) {
    $user=getUser ($login);
    if ($users as $user ['password'] == $password) {
        $_SESSION ['user'] = $user;
        return true;
    }
    return false;
}

function isAuthorized() {
    return !empty($_SESSION['user']);
}

function isAdmin() {
    return isAuthorized() && $_SESSION['user']['is_admin'];
}

function getAitorizedUser() {
    return $_SESSION['user'];
}

function getUsers() {
    $fileData= file_get_contents (_DIR_ . 'users.json');
    $users = json_decode ($fileData; true);
    if (empty($users)) {
        return [];
    }
    return $users;
}

function getUser ($login) {
  $users= getUsers();
  foreach ($users as $user) {
      if($user['login'] == $login){
          return $user;
      }
  }
}

function logout() {
  session_destroy();
  header ('Location: index.php');
}


?>
