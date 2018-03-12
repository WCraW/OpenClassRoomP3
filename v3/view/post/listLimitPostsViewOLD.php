<html>	
<h1>COUCOU</h1>
<h3></h3>
<?php
$PostManager = new PostManager(); // Création d'un objet
$post = $PostManager->getLimitPosts();
var_dump($PostManager);
var_dump($post);
while ($donnees = $post->fetch())
{
?>
    <p>
    <?php echo $donnees['Id']; ?>
    <?php echo $donnees['Titre']; ?>
    <?php echo $donnees['Number']; ?>
    <?php echo $donnees['Contenue']; ?>
    <?php echo $donnees['Date']; ?>
   </p>
<?php
}
?>
</html>