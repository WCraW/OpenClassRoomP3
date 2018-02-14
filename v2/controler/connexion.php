<?php

require_once('./model/AccountManager.php');


function adminCo($covalid)
{
	$accountManager = new AccountManager(); // Création d'un objet
    $Account = $accountManager->getAccount(); // Appel d'une fonction de cet objet

    require('./view/admin/adminco.php');
}

function adminDeco($covalid)
{
	session_start();
	session_unset();
	header('location: index.php ');

}

function adminpage($covalid)
{
	require('./view/admin/adminpage.php');
}

function adminVerif($covalid)
{
	$accountManager = new AccountManager(); // Création d'un objet
    $accounts = $accountManager->getAccount(); // Appel d'une fonction de cet objet

	var_dump($accounts);
	foreach ($accounts as $account) 
	{
		$login_valide = $account->get_pseudo();
		$mdp_valide = $account->get_mdp();
		var_dump($_POST['login']);
		var_dump($_POST['mdp']);
		if(isset($_POST['login']) && isset($_POST['mdp']))
		{
			if($login_valide == $_POST['login'] && $mdp_valide == $_POST['mdp'])
			{
				echo "Ok";
				session_start();

				$_SESSION['login'] = $_POST['login'];
				$_SESSION['mdp'] = $_POST['mdp'];
				header('location: index.php?action=adminpage');
			}
			else
			{
				echo "Pas Ok";
				header('location: index.php?action=adminco');
			}
		}
	}
}