<?php
require "gump.class.php";

$is_valid = GUMP::is_valid($_POST, array(
  'pseudo' => 'required|alpha_numeric|max_len,20|min_len,4',
  'contenu' => 'required|alpha_numeric'
));

if($is_valid != true) {
  print_r($is_valid);
}