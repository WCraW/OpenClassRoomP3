
<html>
	<head>
		<title>
			Accueil
		</title>
	</head>
	<body>
		<div id="main"> <!-- DIV DE DROITE  -->

			<a href="./index.php?action=getLimitPosts">
				<div id="voirplus">
					> Revenir a la page d'accueil <
				</div>
			</a>

			<?php
			foreach ($posts as $post) 
			{
			?>
				<a href="./index.php?action=post&id=<?php echo $post->get_id(); ?>" id="chapitre-link"> 
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
		   					<?php
							$max = 400;
							$chaine = $post->get_contenu();
							if (strlen($chaine) >= $max)
							{
							   $chaine = substr($chaine, 0, $max);
							   $espace = strrpos($chaine, " ");
							   $chaine = substr($chaine, 0, $espace)."...";
							}
		   					echo $chaine;
		   					?>
		   					 <br>
	   						<a href="#Post"> 
	   					 		Voir plus ..
	   						</a>
						</div>
						<div class="date">
							<?php echo $post->get_date(); ?>
						</div>
				<!--	<div class="commenter">
							Commenter
						</div> -->
					</div>
				</a>
				<?php
				}
				?>
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
			</div>
		</div>

	</body>
</html>

<style>
	body
	{
		margin: 0;
		padding: 0;
	}


	a
	{
		font-size: 1.2vw;
		color: #00D3CC;
		text-decoration: none;
	}

 	/* DIV DE DROITE */

	#main
	{
		background-color: #F5F5F5;
		width: 100%;
		float: right;
		min-height: 100%;
	}

	#chapitre-link
		{
			color:#000;
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

	.chapitres:hover
	{
		border-color: #00D3CC;
		box-shadow: 0 0 2px #00D3CC;
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


	#deletepost
	{	
		font-size: 0.9vw;
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
	/*
	.commenter
	{
		background-color: #00D3CC ;
		text-align: center;
		color: #FFFFFF;
		border: 2px #00D3CC solid;
		width: 20%;
		padding-top: 1%; 
		padding-bottom: 1%; 
		margin: 0px auto;
		margin-top:10px;
		margin-bottom: 10px;
		font-weight: bold;
	}
	*/
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
	/* DIV DE DROITE */

	.footeradmin
	{
		width:100%;
		text-align: center;
	}
</style>

