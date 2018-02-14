<?php
require_once("model/Manager.php"); 

class PostManager extends Manager
{

    public function getAllPosts()
    {
        $db = $this->dbConnect();
        $sql = 'SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE 1 ORDER BY `chapitre`.`Date` DESC';
        $post = $db->query($sql);

        return $post; 
    }

    public function getLimitPosts()
    {
        $db = $this->dbConnect();
        $sql = 'SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE 1 ORDER BY `chapitre`.`Date` DESC LIMIT 0, 4';
        $post = $db->query($sql);


        return $post;   
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    /*
    public function postPost($postId, $title, $contents)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO posts(post_id, title , contents , post_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $title, $contents));

        return $affectedLines;
    }
    */
}