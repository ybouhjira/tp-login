<?php

require_once 'functions.php';

$user = get_user();

if(is_logged_in($user) || form_is_valid($user))
  header('Location: translation.php');
else
  header('Location: index.php?error');

