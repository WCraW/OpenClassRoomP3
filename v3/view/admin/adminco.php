<?php
	if(isset($_SESSION['login']) && isset($_SESSION['login']))
	{
		header('location: ./index.php?action=adminpage');
	}
?>
<html>
	<head>
	<meta charset="UTF-8"/>
	<title>Wumber - Connexion</title>
	</head>
	
	<body>
		<div id="contenu">
			<div id="formulaire">
				<form action="index.php?action=adminverif" method="post" >
					<input type="text" name="login" placeholder="Nom de compte" maxlength="10" required="required" class="inputco" /><br>
					<input type="password" name="mdp" title="Mot de passe" maxlength="10" tabindex="1" autocomplete="off" placeholder="Mot de passe" autocorrect="off" required="required" class="inputco" />
					<div id="inscmdp">
						<div id="oubliemdp">
							<a href="#">  
								Mot de passe oublié
							</a>
						</div>
					</div>
					<div id="button">
						<button id="connexion">
							Connexion
						</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
<style>		
	body
	{
		margin: 0;
		padding: 0;
		background:#EFEFEF;
	}
	@font-face {
		font-family: wow;
		src: url('./view/font/semplicita.woff2');
	}
	#contenu
	{
		padding-top: 30%;
		width:40%;
		margin: 0 auto;
		text-align: center;
	}
	#contenu img
	{
		padding-top:3%;
		width: 50%;
		height: auto;
		margin: 0 auto;	
		padding-bottom: 1%
	}
	.inputco
	{
		width: 60%;
		height: 6%;
		border: 2px solid black;
		margin:1% 0;
		font-size: 1.2vw;
		background: #FFF;
		color: #000;
		padding-left: 3%;
	}
	.inputco:hover
	{
		border-color:#ffc040;
	}
	.inputco:focus
	{
		border-color:#ffc040;
	}
	.inputco::placeholder
	{
		font-family: Arial;
	}
	#button
	{
		margin-top: 2%;	
	}
	#connexion
	{	
		/* PARAMETRE D UN BOUTON */
		-webkit-writing-mode: horizontal-tb;
		align-items: flex-start;
	    text-align: center;
		font: 13.3333px Arial;
		-webkit-appearance: button;
	    cursor: default;
	    text-rendering: auto;
	    letter-spacing: normal;
	    word-spacing: normal;
	    text-transform: none;
	    text-indent: 0px;
	    text-shadow: none;
	    display: inline-block;
	    box-sizing: border-box;
	    /*FIN*/
		margin: 0 auto;
		width: 80%;
		padding-left: 2%;
		padding-right: 2%;
		padding-bottom: 1%;
		padding-top: 1%;
		border: 2px solid white;
		font-size: 1.4vw;
		background: rgba(5,5,5,1);
		font-family: wow;
		color: white;
		margin-top: 2%;			
	}
	#connexion:hover
	{
		box-shadow: 0 0 10px #FFF;
		transition: all 1s;
		transform: scale(1.05);
		-ms-transform: scale(1.05);
		-webkit-transform: scale(1.05);
		-o-transform: scale(1.05);
		-moz-transform: scale(1.05);
	}
	#inscmdp
	{
		width: 60%;
		margin: 0 auto;
	}
	#oubliemdp
	{
		font-style: italic;
		margin: 0 auto;
		text-align: right;
	}
	#oubliemdp a, #minscrire a
	{
		text-decoration: none;
		color: red;
	}
	
	#oubliemdp a:hover
	{
		color: white;
	}
	
	#footer
	{
		position: absolute;
		bottom: 0;
	}
</style>