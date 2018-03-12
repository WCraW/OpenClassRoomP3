<div id="contenu">
	<img src="./view/img/logoco.png" />
	<div id="formulaire">
		<form action="./connexion.php" method="post" >
			<input type="text" name="users" placeholder="Nom de compte" maxlength="10" required="required" class="inputco" /><br>
			<input type="password" name="password" title="Mot de passe" maxlength="10" tabindex="1" autocomplete="off" placeholder="Mot de passe" autocorrect="off" required="required" class="inputco" />
			<div id="inscmdp">
				<div id="oubliemdp">
					<a href="#">  
						Mot de passe oublié
					</a>
				</div>
			</div>
			<button id="connexion">
				Connexion
			</button>
		</form>
	</div>
</div>
<style>		
	@font-face {
		font-family: wow;
		src: url('./view/font/semplicita.woff2');
	}
	#contenu
	{
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
	#connexion
	{	

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

		margin: 0 auto;
		width: 40%;
		padding-left: 2%;
		padding-right: 2%;
		padding-bottom: 1%;
		padding-top: 1%;
		border: 2px solid grey;
		font-size: 1.4vw;
		background: rgba(0,0,0,0);
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
		color: yellow;
		font-style: italic;
		margin: 0 auto;
		text-align: right;
	}
	#oubliemdp a, #minscrire a
	{
		text-decoration: none;
		color: yellow;
	}
	#footer
	{
		position: absolute;
		bottom: 0;
	}
</style>
<script>
	function gotoinsc()
	{
		window.location.href = "./inscription.php";
	}
</script>