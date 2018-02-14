<html>
	<head>
	</head>
	<body>
		<div class="main">
		<?php
		foreach ($comments as $comment) 
		{
			if($comment->get_underc() == 0)
			{
			?>

				<div class="chapitres">
					<div class="titres">
						<?php echo $comment->get_auteur(); ?>
						<?php
						if($covalid == "<a href='./index.php?action=adminco'> La page Admin </a> <br> <a href='./index.php?action=admindeco'>se déco</a>")
						{
						?>
							<a href="./index.php?action=deletecomment&id=<?php echo $comment->get_id(); ?>" class="deletepost">
								Supprimer le commentaire
							</a>
						<?php
						}
						?>
					</div>

					<a>
						<div class="contenu">
								 <?php echo $comment->get_contenu(); ?> <br>
						</div>
						<div class="date">
							<?php echo $comment->get_date(); ?>
						</div>
					</a>
				</div>


					<?php
					foreach ($comments as $underc) 
					{
						if($underc->get_underc() == $comment->get_id())
						{
						?>
							<div class="chapitres-underc">
								<div class="titres-underc">
									<?php echo $underc->get_auteur(); ?>
									<?php
										if($covalid == "<a href='./index.php?action=adminco'> La page Admin </a> <br> <a href='./index.php?action=admindeco'>se déco</a>")
										{
										?>
											<a href="./index.php?action=deletecomment&id=<?php echo $comment->get_id(); ?>" class="deletepost">
												Supprimer le commentaire
											</a>
										<?php
										}
									?>
								</div>
								<div class="contenu-underc">
									<?php echo $underc->get_contenu(); ?> <br>
								</div>
								<div class="date-underc">
									<?php echo $underc->get_date(); ?>
								</div>

							</div>
						<?php
						}	
					}
				?>
			
			<?php
			}

		}
		?>
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

	.main
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



	/* UNDER COMM */
	.chapitres-underc
	{
		background-color: #FFFFFF ;
		border: 2px #EEEEEE solid;
		width: 75%;
		padding-bottom:2%;
		padding-top:1%;
		margin: 0px auto;
		margin-top:10px;
		margin-left:17%;
	}

	.chapitres-underc:hover
	{
		border-color: #00D3CC;
		box-shadow: 0 0 2px #00D3CC;
	}

	.titres-underc
	{
		width: 100%;
		text-align: center;
		color: #000;
		font-size: 1.4vw;
		margin-top: 5px;
		font-weight: bold;
	}

	.contenu-underc
	{
		width: 95%;
		text-align: left;
		color: #000;
		font-size: 1.1vw;
		margin: 0px auto;
		margin-top: 10px;
		margin-bottom: 10px;
	}

	.contenu-underc a 
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
	.date-underc
	{
		float:right;
		text-align: right;
		width: 35%;
		color: #000;
		margin-right: 10px;
		font-size: 1vw;
		font-style: italic;
	}



	.deletecom
	{
		font-size: 0.9vw;
	}	/* DIV DE DROITE */

	.footeradmin
	{
		width:100%;
		text-align: center;
	}
</style>