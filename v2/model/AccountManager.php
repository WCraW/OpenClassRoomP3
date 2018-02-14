<?php
require_once("model/Manager.php"); 

require_once("model/Entities/Account.php"); 

class AccountManager extends Manager
{
	 public function getAccount()
    {
        $db = $this->dbConnect();
        $sql = 'SELECT * FROM `account` WHERE 1';
        $accounts = $db->query($sql)->fetchAll();
        $accountEntities = array();
        foreach ($accounts as $account) 
        {
           /* 
            Crée une classe 'Post'
            Definir les variables en privée de 'Id / Number / Titre ect..'
            En public Get X & Set X


            Crée un dossier Antités : 
            */
            $accountEntity = new Account();
            $accountEntity->set_id($account['Id']);
            $accountEntity->set_pseudo($account['Pseudo']);
            $accountEntity->set_mdp($account['Mdp']);
            array_push($accountEntities, $accountEntity);

        }

        return $accountEntities;
    }
}