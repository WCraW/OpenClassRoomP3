<?php

// Chargement des classes
require_once('model/CommentManager.php');

function getAllComments($covalid)
{
    $commentManager = new CommentManager();
   /* $commentManager = new CommentManager(); */
    $comments = $commentManager->getAllComments();
    
    require('./view/comment/listAllCommentsView.php');
}

function deletecomment($covalid)
{

    $commentManager = new CommentManager();
    $comments = $commentManager->deleteComment($_GET['id']);

    require('./view/comment/listAllCommentsView.php');

}
