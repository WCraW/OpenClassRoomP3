<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function getLimitPosts1($covalid)
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getLimitPosts(); // Appel d'une fonction de cet objet

    require('./view/post/listLimitPostsView.php');
}

function getAllPosts1($covalid)
{
    $postManager = new PostManager(); 
    $posts = $postManager->getAllPosts();

    require('./view/post/listAllPostsView.php');
}


function post($covalid)
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();
   /* $commentManager = new CommentManager(); */

    $posts = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    
    require('./view/post/postView.php');
}

function addcomment($covalid, $postId, $pseudo, $contenu, $date)
{
    $commentManager = new CommentManager();
    $comments = $commentManager->addComments($postId, $pseudo, $contenu, $date);

    if ($comments == false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=getAllPosts');
    }
    /*header('location: ./index.php?action=post&id='.$_GET['id']);*/
}

function addundercomment()
{

}

function deletepost($covalid)
{

    $postManager = new PostManager();
    $posts = $postManager->deletePost($_GET['id']);

    require('./view/post/listAllPostsView.php');

}


function addPost($covalid, $number, $titre, $contenu, $date)
{
    $postManager = new PostManager();
    var_dump($number);
    var_dump($titre);
    var_dump($contenu);
    var_dump($date);
    $posts = $postManager->addPost($number, $titre, $contenu, $date);
    if ($posts == false) {
        die('Impossible d\'ajouter le chapitre !');
    }
    else {
        header('Location: index.php?action=addPost');
    }


    require('./view/post/addPost.php');
}
/*
function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}
*/