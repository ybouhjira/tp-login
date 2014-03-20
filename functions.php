<?php
function get_user()
{
  return [
    'user' => 'root',
    'password' => '12345'
  ];
}

function is_logged_in($user)
{
    if(!isset($_SESSION))
    session_start();

  return isset($_SESSION['username'], $_SESSION['password'])
    && $_SESSION['username'] === $user['username'] && $_SESSION['password'] === $user['password'];
}

function form_is_valid($user)
{
  return isset($_POST['username'], $_POST['password'])
    && $_POST['username'] === $user['username'] && $_POST['password'] === $user['password'];
}
