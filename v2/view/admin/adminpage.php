<?php
	if(isset($_SESSION['login']) && isset($_SESSION['login']))
	{

	}
	else
	{
		header('location: ../../index.php?action=adminco');
	}
?>
<html>
	<head>
		<!-- <script type="text/javascript" src="./view/js/tinymce.js"></script>
    	<script type="text/javascript">
        tinyMCE.init({
            mode : "textareas",
            theme : "simple"
        });
     </script> -->

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
	</head>
	<body>

		<div id="titlepage">
			Admin Page
		</div>
		<div id="contenu">
			<a href="./index.php?action=getAllComments">
				<div id="comment">
				 	Voir les commentaires
				</div>
			</a>
			<a href="./index.php?action=getAllPosts">
				<div id="post">
				 	Voir les chapitres
				</div>
			</a>
			<a>
				<div id="postsolo" onclick="addpost()">
				 	Ajouter un chapitre
				</div>
			</a>
		</div>
		<div id="contenu2">
			<form action="./index.php?action=addpost" method="post">
				Chapitre N°<input type="number" name="number" /> :
				<input type="text" name="titre" />
				<textarea name="content"></textarea>
				<input type="submit" name="send" id="send" value="Publier le chapitre">
			</form>
		</div>
		<div id="footeradmin">
			<?php
				echo $covalid;
			?>
		</div>
	</body>
</html>

<style>
	body
	{
		margin: 0px;
		padding: 0px;
	}

	a
	{
		color: white;
		text-decoration: none;
	}


	#send
	{
		margin-top: 10%;
	}

	#mceu_11 
	{
		height:60%;
	}

	#mceu_26
	{
		height:99%;
	}


	#titlepage
	{
		width: 100%;
		padding-top:1%;
		padding-bottom:1%;
		text-align: center;
		font-style: italic;
		font-size: 4vw;
		margin-bottom: 3%;
	}

	#contenu
	{
		float: none;
		color: white;
		margin-bottom: 2%;
	}

	#contenu2		
	{
		display: none;
	}

	#post
	{
		margin-left: 2.5%;
		text-align: center;
		padding-top: 2.5%;
		padding-bottom: 2.5%;
		width: 46.25%;
		background-color: rgba(0,0,0,0.75);
		box-shadow: 0 0 3px black;
		font-size: 2.5vw;

	}

	#post:hover
	{
		background-color: rgba(0,0,0,1);
		box-shadow: 0 0 10px black;
	}

	#postsolo
	{
		margin-left: 2.5%;
		text-align: center;
		padding-top: 2.5%;
		padding-bottom: 2.5%;
		width: 95%;
		background-color: rgba(0,0,0,0.75);
		box-shadow: 0 0 3px black;
		font-size: 2.5vw;

	}

	#postsolo:hover
	{
		background-color: rgba(0,0,0,1);
		box-shadow: 0 0 10px black;
	}

	#comment
	{
		float: right;
		margin-right: 2.5%;
		text-align: center;
		padding-top: 2.5%;
		padding-bottom: 2.5%;
		width: 46.25%;
		background-color: rgba(0,0,0,0.75);
		box-shadow: 0 0 3px black;
		font-size: 2.5vw;
	}

	#comment:hover
	{
		background-color: rgba(0,0,0,1);
		box-shadow: 0 0 10px black;
	}

	#footeradmin
	{
		width:100%;
		margin-top:3%;
		text-align: center;
		color: black;
	}

	#footeradmin a
	{
		font-size: 1.2vw;
		color: #00D3CC;
		text-decoration: none;
	}

	#postsolo
	{
		margin-top: 2%;
	}
</style>

<script type="text/javascript">
	function addpost()
	{
		var x = document.getElementById('contenu2');
		var y = document.getElementById('contenu');
		if (x.style.display == '')
		{
			x.style.display = 'block';
			y.style.display = 'none';
		}
		else if (x.style.display == 'block')
		{
			x.style.display = 'none';
			y.style.display = 'block';
		}
	}

</script>