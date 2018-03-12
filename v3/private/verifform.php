<?php
require "gump.class.php";

$is_valid = GUMP::is_valid($_POST, array(
  'username' => 'required|alpha_numeric',
  'password' => 'required|max_len,100|min_len,6'
));

if($is_valid === true) {
  // continue
} else {
  print_r($is_valid);
}