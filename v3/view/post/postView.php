<html>
	<head>
		<title>
			Accueil
		</title>
	</head>
	


	<body>

		<a href="./index.php?action=getLimitPosts">
			<div id="voirplus">
				> Revenir a la page d'accueil <
			</div>
		</a>

		<?php

		foreach ($posts as $post) 
		{
		?>
			<div id="main"> <!-- DIV DU CHAPITRE  -->
				<div class="chapitres">
					<div class="titres">
						Chapitre n° <?php echo $post->get_number(); ?> : <?php echo $post->get_titre(); ?> 
						<?php
							if($covalid == "<a href='./index.php?action=adminco'> La page Admin </a> <br> <a href='./index.php?action=admindeco'>se déco</a>")
							{
							?>
								<a href="./index.php?action=deletepost&id=<?php echo $post->get_id(); ?>" class="deletepost">
									Supprimer l'article
								</a>
							<?php
							}
							?>

					</div>
					<div class="contenu">
	   					 <?php echo $post->get_contenu(); ?> <br>
					</div>
					<div class="date">
						<?php echo $post->get_date(); ?>
					</div>
				</div>
			</div> <!-- DIV DU CHAPITRE  -->
		<?php
		}
		?>
		<button class="reply" onclick="reply()">
			Laisser un commentaire
		</button>
		<form id="form-addcomment" method="post" action="./index.php?action=addcomment&id=<?php echo $_GET['id'] ?>"><br>
			<fieldset>
				<legend>Ajouter un commentaire</legend>
		        <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" /><br>
		        <textarea id="Contenu" name="contenu" placeholder="Contenu" ></textarea><br>
			<button>Publier mon commentaire</button>
			</fieldset>
		</form>
		<div id="main-comment">			<?php
			foreach ($comments as $comment) 
			{
				if($comment->get_underc() == 0)
				{
				?>
				 <!-- DIV DU CHAPITRE  -->
					<div class="chapitres-comment">
						<div class="titres-comment">
							<?php echo $comment->get_auteur(); ?>
						</div>
						<div class="contenu-comment">
								 <?php echo $comment->get_contenu(); ?> <br>
						</div>
						<div class="date-comment">
							<?php echo $comment->get_date(); ?>
						</div>

						<button class="underreply" onclick="underreply()">
							Répondre
						</button>

						<form id="form-comment"><br>
							<fieldset>
								<legend>Ajouter un commentaire</legend>
						        <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" /><br>
						        <textarea id="Contenu" name="Contenu" placeholder="Contenu" ></textarea><br>
							<button>Publier mon commentaire</button>
							</fieldset>
						</form>
					</div>
					 <!-- DIV DU CHAPITRE  -->
					<div class="chapitres-underc">
						<?php
						foreach ($comments as $underc) 
						{
							if($underc->get_underc() == $comment->get_id())
							{
							?>
									<div class="titres-underc">
										<?php echo $underc->get_auteur(); ?>
									</div>
									<div class="contenu-underc">
											 <?php echo $underc->get_contenu(); ?> <br>
									</div>
									<div class="date-underc">
										<?php echo $underc->get_date(); ?>
									</div>
							<?php
							}	
						}
					?>
					</div>
				
				<?php
				}

			}
			?>
		</div>
		<?php
		if($covalid == "<a href='./index.php?action=adminco'> La page Admin </a> <br> <a href='./index.php?action=admindeco'>se déco</a>")
		{
		?>
			<div id="footeradmin">
				<?php
					echo $covalid;
				?>
			</div>
		<?php
		}
		?>
	</body>
</html>


<style>
	body
	{
		margin: 0;
		padding: 0;
		background-color: #F5F5F5;
	}


	a
	{
		font-size: 1.2vw;
		color: #00D3CC;
		text-decoration: none;
	}

	/* DIV DU CHAPITRE */

	#main
	{
		background-color: #F5F5F5;
		width: 100%;
	}

	.chapitres
	{
		background-color: #FFFFFF ;
		border: 2px #EEEEEE solid;
		width: 85%;
		padding-bottom:2%;
		padding-top:1%;
		margin: 0px auto;
		margin-top:10px;
	}
	
	.titres
	{
		width: 100%;
		text-align: center;
		color: #000;
		font-size: 1.5vw;
		margin-top: 5px;
		font-weight: bold;
	}

	.contenu
	{
		width: 95%;
		text-align: left;
		color: #000;
		font-size: 1.2vw;
		margin: 0px auto;
		margin-top: 10px;
		margin-bottom: 10px;
	}

	.contenu a 
	{
		font-style: italic;
	}

	
	#voirplus
	{
		text-align: center;
		color: #000;
		padding:1%;
		box-shadow: 0 0 2px black;
		background-color: #E5E5E5;
	}

	#voirplus:hover
	{
		box-shadow: 0 0 5px black;
		background-color: #E0E0E0;
	}

	.date
	{
		float:right;
		text-align: right;
		width: 35%;
		color: #000;
		margin-right: 10px;
		font-size: 1.1vw;
		font-style: italic;
	}

	/* DIV DU CHAPITRE */
	#form-addcomment
	{

		display: none;
		padding: 1%;
		font-size: 1vw;
	}

	#form-addcomment #pseudo
	{
		padding:0.5%;
		margin:0.5%;
		min-width: 125px;
		width: 12.5%;
	}

	#form-addcomment textarea
	{
		padding:0.5%;
		margin:0.5%;
		min-width: 300px;
		width: 30%;
		height:100px;
	}

	#form-addcomment button
	{
		padding:0.5%;
		margin:0.5%;
	}
	/* DIV DES COMMENTAIRES */
	#main-comment
	
	{    
    	padding: 1%;
	    /*background-color: rgba(54, 54, 54,0.1);*/
	    border:1px solid grey;
	    color: black;
		margin-top: 3%;
		margin-left:1%;
		font-size: 1vw;    
		margin-left: 0.5%;
   		margin-right: 0.5%;
	}

	.chapitres-comment
	{
		margin-bottom: 0.2%;
	}

	.contenu-comment
	{
	}

	.date-comment
	{
		font-style: italic;
		font-size: 0.8vw;
	}

	.reply
	{
		font-style: italic;
		font-size: 0.95vw;
		background: none;
		padding:6px 0 6px 0;
		font:bold 13px Arial;
		background:#f5f5f5;
		color:#555;
		border-radius:2px;
		border:1px solid #ccc;
		padding-left: 10px;
		padding-right: 10px;
		margin-left: 7.5%;
	}

	.reply:hover
	{
		color: #00D3CC;
		box-shadow: 0 0 2px #00D3CC;
	}

	.underreply
	{
		font-style: italic;
		font-size: 0.95vw;
		background: none;
		padding:6px 0 6px 0;
		font:bold 13px Arial;
		background:#F5F5F5;
		color:#555;
		border-radius:2px;
		border:1px solid #ccc;
		padding-left: 10px;
		padding-right: 10px;
	}

	.underreply:hover
	{
		color: #00D3CC;
		box-shadow: 0 0 2px #00D3CC;
	}

	#form-comment
	{
		display: none;
		padding: 1%;
		font-size: 1vw;
	}

	#form-comment #pseudo
	{
		padding:0.5%;
		margin:0.5%;
		min-width: 125px;
		width: 12.5%;
	}

	#form-comment textarea
	{
		padding:0.5%;
		margin:0.5%;
		min-width: 300px;
		width: 30%;
		height:100px;
	}

	#form-comment button
	{
		padding:0.5%;
		margin:0.5%;
	}
	/* DIV DES COMMENTAIRES */

	/* DIV DES SOUS-COMMENTAIRES */

	.chapitres-underc
	{
		margin-left:3%;
		margin-bottom: 3%;
	}

	.contenu-underc
	{
	}


	.date-underc
	{
		font-style: italic;
		font-size: 0.8vw;
	}

	#footeradmin
	{
		width:100%;
		margin-top:3%;
		text-align: center;
	}

	/* DIV DES SOUS-COMMENTAIRES */
</style>
<script>
	function reply()
	{
		
		var x = document.getElementById('form-addcomment');
		if (x.style.display == '')
		{
			x.style.display = 'block';
		}
		else if (x.style.display == 'block')
		{
			x.style.display = '';
		}
		/*document.getElementsByClassName("form-comment").style.display='block';*/
	}

	function underreply()
	{
		
		var x = document.getElementById('form-comment');
		if (x.style.display == '')
		{
			x.style.display = 'block';
		}
		else if (x.style.display == 'block')
		{
			x.style.display = '';
		}
		/*document.getElementsByClassName("form-comment").style.display='block';*/
	}
	
</script>