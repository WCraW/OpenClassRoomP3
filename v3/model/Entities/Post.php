<?php
	class Post
	{
		/* Id`, `Number`, `Titre`, `Contenue`, `Date` */

		private $id;
		private $number;
		private $titre;
		private $contenu;
		private $date;

		/* LES GETTERS */ 

		public function get_id()
		{
			return $this->id;
		}

		public function get_number()
		{
			return $this->number;
		}

		public function get_titre()
		{
			return $this->titre;
		}

		public function get_contenu()
		{
			return $this->contenu;
		}

		public function get_date()
		{
			return $this->date;
		}



		/* LES SETTERS */ 

		public function set_id($id)
		{
			$this->id = $id;
		}

		public function set_number($number)
		{
			$this->number = $number;
		}

		public function set_titre($titre)
		{
			$this->titre = $titre;
		}

		public function set_contenu($contenu)
		{
			$this->contenu = $contenu;
		}

		public function set_date($date)
		{
			$this->date = $date;
		}



	}

?>