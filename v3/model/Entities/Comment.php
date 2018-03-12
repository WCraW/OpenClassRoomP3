<?php
	class Comment
	{

		private $id;
		private $id_post;
		private $auteur;
		private $contenu;
		private $date;
		private $underc;

		/* LES GETTERS */ 

		public function get_id()
		{
			return $this->id;
		}

		public function get_id_post()
		{
			return $this->id_post;
		}

		public function get_auteur()
		{
			return $this->auteur;
		}

		public function get_contenu()
		{
			return $this->contenu;
		}

		public function get_date()
		{
			return $this->date;
		}

		public function get_underc()
		{
			return $this->underc;
		}



		/* LES SETTERS */ 

		public function set_id($id)
		{
			$this->id = $id;
		}

		public function set_id_post($id_post)
		{
			$this->id_post = $id_post;
		}

		public function set_auteur($auteur)
		{
			$this->auteur = $auteur;
		}

		public function set_contenu($contenu)
		{
			$this->contenu = $contenu;
		}

		public function set_date($date)
		{
			$this->date = $date;
		}

		public function set_underc($underc)
		{
			$this->underc = $underc;
		}


	}

?>