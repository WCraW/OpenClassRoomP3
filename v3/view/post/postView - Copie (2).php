<html>
	<head>
		<title>
			Accueil
		</title>
	</head>
	<body>
		<div id="main"> <!-- DIV DU CHAPITRE  -->
			<div class="chapitres">
				<div class="titres">
					Chapitre n° <?php echo $post['Id']; ?> : <?php echo $post['Titre']; ?>
				</div>
				<div class="contenu">
   					 <?php echo $post['Contenue']; ?> <br>
				</div>
				<div class="date">
					<?php echo $post['Date']; ?>
				</div>
			</div>
		</div> <!-- DIV DU CHAPITRE  -->
		
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

	/* DIV DU CHAPITRE */

	#main
	{
		background-color: #F5F5F5;
		width: 100%;
		float: right;
		height: 100%;
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
</style>

