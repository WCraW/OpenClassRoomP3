<?php
	class Account
	{

		private $id;
		private $pseudo;
		private $mdp;

		/* LES GETTERS */ 

		public function get_id()
		{
			return $this->id;
		}

		public function get_pseudo()
		{
			return $this->pseudo;
		}

		public function get_mdp()
		{
			return $this->mdp;
		}


		/* LES SETTERS */ 

		public function set_id($id)
		{
			$this->id = $id;
		}

		public function set_pseudo($pseudo)
		{
			$this->pseudo = $pseudo;
		}

		public function set_mdp($mdp)
		{
			$this->mdp = $mdp;
		}

	}

?>