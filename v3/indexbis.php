<?php
session_start();
require('./private/autoload.php');
require('./controler/post.php');
require('./controler/comment.php');
require('./controler/connexion.php');

if( ! isset( $covalid ) ) $covalid = 'TU ES PAS CONNECTE';
if(isset($_SESSION['login']) && isset($_SESSION['login']))
{
    $covalid = "<a href='./index.php?action=adminco'> La page Admin </a> <br> <a href='./index.php?action=admindeco'>se déco</a>";
}

if (isset($_GET['action'])) 
{
	$name = $_GET['action'];
}
else 
{
   $name =  "getLimitPosts1";
}

__autoload($name);

?>