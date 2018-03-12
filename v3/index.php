<?php
session_start();
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
    if ($_GET['action'] == 'getAllPosts') 
    {
        getAllPosts1($covalid);
    }
    elseif ($_GET['action'] == 'getAllComments') 
    {
        if(isset($_SESSION['login']) && isset($_SESSION['login']))
        {
            getAllComments($covalid);
        }
        else
        {
            getLimitPosts1($covalid);
        }
    }
    elseif ($_GET['action'] == 'post') 
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
        {
            post($covalid);
        }
        else 
        {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'deletepost')     
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
        {
            if(isset($_SESSION['login']) && isset($_SESSION['login']))
            {
                deletepost($covalid);
            }
            else
            {
                getLimitPosts1($covalid);
            }
        }
        else 
        {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'deletecomment')     
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
        {
            if(isset($_SESSION['login']) && isset($_SESSION['login']))
            {
                deletecomment($covalid);
            }
            else
            {
                getAllComments($covalid);
            }
        }
        else 
        {
            echo 'Erreur : aucun identifiant de commentaire envoyé';
        }
    }
    elseif ($_GET['action'] == 'adminco') 
    {
        adminCo($covalid);
    }
    elseif ($_GET['action'] == 'admindeco') 
    {
        adminDeco($covalid);
    }
    elseif ($_GET['action'] == 'addpost') 
    {
        if(isset($_SESSION['login']) && isset($_SESSION['login']))
        {
            $date = date('d m Y');
            addPost($covalid, $_POST['number'], $_POST['titre'], $_POST['content'], $date);
        }
        else
        {
            getLimitPosts1($covalid);
        }
    }
    elseif ($_GET['action'] == 'adminverif') 
    {
        adminVerif($covalid);
    }
    elseif ($_GET['action'] == 'adminpage') 
    {
        adminPage($covalid);
    } 
    elseif ($_GET['action'] == 'addcomment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['pseudo']) && !empty($_POST['contenu'])) 
            {
                 $date = date('d m Y');
                 addComment($covalid, $_GET['id'], $_POST['pseudo'], $_POST['contenu'], $date);
            }
            else 
            {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    /*elseif ($_GET['action'] == 'addcomment') 
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
        {
            addcomment($covalid);
        }
        else 
        {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }*/
    else
    {
        getLimitPosts1($covalid);
    }
}
else 
{
    getLimitPosts1($covalid);
}
