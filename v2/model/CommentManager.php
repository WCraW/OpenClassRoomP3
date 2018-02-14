<?php
require_once("model/Manager.php"); 

require_once("model/Entities/Post.php"); 
require_once("model/Entities/Comment.php"); 

class CommentManager extends Manager
{

    public function getAllComments()
    {
        $db = $this->dbConnect();
        $sql = $db->prepare('SELECT * FROM `comments`');

        $sql->execute(array());
        $comments = $sql->fetchAll();

        $commentEntities = array();
        foreach ($comments as $comment) 
        {
           /* 
            Crée une classe 'Post'
            Definir les variables en privée de 'Id / Number / Titre ect..'
            En public Get X & Set X


            Crée un dossier Antités : 
            */
            $commentEntity = new Comment();
            $commentEntity->set_id($comment['Id']);
            $commentEntity->set_id_post($comment['Id_Post']);
            $commentEntity->set_auteur($comment['Auteur']);
            $commentEntity->set_contenu($comment['Contenue']);
            $commentEntity->set_date($comment['Date']);
            $commentEntity->set_underc($comment['Underc']);
            array_push($commentEntities, $commentEntity);

        }

        return $commentEntities;
    }

      public function deleteComment($postId)
    {
        $db = $this->dbConnect();
        $sql = $db->prepare('DELETE FROM `chapitre` WHERE id = ?');

        $sql->execute(array($postId));

        $sql2 = $db->prepare('SELECT * FROM `comments`');

        $sql2->execute(array());
        $comments = $sql2->fetchAll();

        $commentEntities = array();
        foreach ($comments as $comment) 
        {
           /* 
            Crée une classe 'Post'
            Definir les variables en privée de 'Id / Number / Titre ect..'
            En public Get X & Set X


            Crée un dossier Antités : 
            */
            $commentEntity = new Comment();
            $commentEntity->set_id($comment['Id']);
            $commentEntity->set_id_post($comment['Id_Post']);
            $commentEntity->set_auteur($comment['Auteur']);
            $commentEntity->set_contenu($comment['Contenue']);
            $commentEntity->set_date($comment['Date']);
            $commentEntity->set_underc($comment['Underc']);
            array_push($commentEntities, $commentEntity);

        }

        return $commentEntities;
    }


    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $sql = $db->prepare('SELECT * FROM `comments` WHERE `Id_Post` = ?');

        $sql->execute(array($postId));
        $comments = $sql->fetchAll();

        $commentEntities = array();
        foreach ($comments as $comment) 
        {
           /* 
            Crée une classe 'Post'
            Definir les variables en privée de 'Id / Number / Titre ect..'
            En public Get X & Set X


            Crée un dossier Antités : 
            */
            $commentEntity = new Comment();
            $commentEntity->set_id($comment['Id']);
            $commentEntity->set_id_post($comment['Id_Post']);
            $commentEntity->set_auteur($comment['Auteur']);
            $commentEntity->set_contenu($comment['Contenue']);
            $commentEntity->set_date($comment['Date']);
            $commentEntity->set_underc($comment['Underc']);
            array_push($commentEntities, $commentEntity);

        }

        return $commentEntities;

    }

    public function addComments($postId, $pseudo, $contenu, $date)
    {
        /*if( ! isset( $postId ) || ! isset( $auteur ) || ! isset( $contenu ) || ! isset( $date ) || ! isset( $undec ) )
        {

        }*/        
        $db = $this->dbConnect();
        $sql = $db->prepare('INSERT INTO `comments` (Id_Post, Auteur, Contenue, Date) VALUES(?, ?, ?, ?)');
        $affectedLines = $sql->execute(array($postId, $pseudo, $contenu, $date));
        return $affectedLines;
    }
    /*

    'Id_Post' => $postId,
            'Auteur' => $_POST['pseudo'],
            'Contenue' => $_POST['contenu'],
            'Date' => $date

     public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment, $date));

        return $affectedLines;
    }

     public function signalComment($commentId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(signal) VALUES(1)');
        $affectedLines = $comments->execute(array($commentId));

        return $affectedLines;
    }
    */
}