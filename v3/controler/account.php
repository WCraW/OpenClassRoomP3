<?php

require_once('model/AccountManager.php');

function adminCo($covalid)
{
	$accountManager = new AccountManager(); // Création d'un objet
    $Account = $AccountManager->getAccount(); // Appel d'une fonction de cet objet

    require('./view/adminco.php');
}

?>