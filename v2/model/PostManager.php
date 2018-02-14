<?php
require_once("model/Manager.php"); 

require_once("model/Entities/Post.php"); 

class PostManager extends Manager
{

    public function getAllPosts()
    {
        $db = $this->dbConnect();
        $sql = 'SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE 1 ORDER BY `chapitre`.`Date` DESC';
       $posts = $db->query($sql)->fetchAll();
        $postEntities = array();
        foreach ($posts as $post) 
        {
           /* 
            Crée une classe 'Post'
            Definir les variables en privée de 'Id / Number / Titre ect..'
            En public Get X & Set X


            Crée un dossier Antités : 
            */
            $postEntity = new Post();
            $postEntity->set_id($post['Id']);
            $postEntity->set_number($post['Number']);
            $postEntity->set_titre($post['Titre']);
            $postEntity->set_contenu($post['Contenue']);
            $postEntity->set_date($post['Date']);
            array_push($postEntities, $postEntity);

        }

        return $postEntities;
    }

    public function getLimitPosts()
    {
        $db = $this->dbConnect();
        $sql = 'SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE 1 ORDER BY `chapitre`.`Date` DESC LIMIT 0, 4';
        $posts = $db->query($sql)->fetchAll();
        $postEntities = array();
        foreach ($posts as $post) 
        {
           /* 
            Crée une classe 'Post'
            Definir les variables en privée de 'Id / Number / Titre ect..'
            En public Get X & Set X


            Crée un dossier Antités : 
            */
            $postEntity = new Post();
            $postEntity->set_id($post['Id']);
            $postEntity->set_number($post['Number']);
            $postEntity->set_titre($post['Titre']);
            $postEntity->set_contenu($post['Contenue']);
            $postEntity->set_date($post['Date']);
            array_push($postEntities, $postEntity);

        }

        return $postEntities;

    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $sql = $db->prepare('SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE id = ?');

        $sql->execute(array($postId));
        $posts = $sql->fetchAll();

        $postEntities = array();
        foreach ($posts as $post) 
        {
           /* 
            Crée une classe 'Post'
            Definir les variables en privée de 'Id / Number / Titre ect..'
            En public Get X & Set X


            Crée un dossier Antités : 
            */
            $postEntity = new Post();
            $postEntity->set_id($post['Id']);
            $postEntity->set_number($post['Number']);
            $postEntity->set_titre($post['Titre']);
            $postEntity->set_contenu($post['Contenue']);
            $postEntity->set_date($post['Date']);
            array_push($postEntities, $postEntity);

        }

        return $postEntities;

    }

    public function deletePost($postId)
    {
        $db = $this->dbConnect();
        $sql = $db->prepare('DELETE FROM `chapitre` WHERE id = ?');

        $sql->execute(array($postId));

        $sql2 = $db->prepare('SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE id = ?');

        $sql2->execute(array($postId));
        $posts = $sql2->fetchAll();

        $postEntities = array();
        foreach ($posts as $post) 
        {
           /* 
            Crée une classe 'Post'
            Definir les variables en privée de 'Id / Number / Titre ect..'
            En public Get X & Set X


            Crée un dossier Antités : 
            */
            $postEntity = new Post();
            $postEntity->set_id($post['Id']);
            $postEntity->set_number($post['Number']);
            $postEntity->set_titre($post['Titre']);
            $postEntity->set_contenu($post['Contenue']);
            $postEntity->set_date($post['Date']);
            array_push($postEntities, $postEntity);

        }

        return $postEntities;

    }


    public function addPost($number, $titre, $contenu, $date)
    {
        $db = $this->dbConnect();
        $sql = $db->prepare('INSERT INTO `chapitre`(`Number`,`Titre`, `Contenue`, `Date`) VALUES (:nombre, :titre, :contenu, :ladate)');

        $affectedLines = $sql->execute(array(
            'nombre' => $number,
            'titre' => $titre, 
            'contenu' => $contenu, 
            'ladate' => $date
            ));
        var_dump($affectedLines);
        return $affectedLines;
    }

    /*
    public function getPost($postId)
        {
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE id = ?');
            $req->execute(array($postId));
            $post = $req->fetch();

            return $post;
        }

    /*public function getPost($postId)
    {
        $db = $this->dbConnect();
        $sql = 'SELECT `Id`, `Number`, `Titre`, `Contenue`, `Date` FROM `chapitre` WHERE id = ?';

        $post = $db->query($sql);

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