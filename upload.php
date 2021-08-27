<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Upload extends CI_Controller{
       
	

		public function activite()
		{

		
			// Appel des vues  
			$this->load->view('entete');
			$this->load->view('activite');
            
		}

///////////////////////////////////////////

		public function revue()
	{
		$this->load->model('ImageModel');

		$aListe = $this->ImageModel->articles('revue de presse');

		// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
		$aView["media"] = $aListe;
		// var_dump($aView["media"]);
		$this->load->view('entete');
		$this->load->view('revue',$aView);
		
	}

/////////////////////////////////////////////

	public function action()
	{
		$this->load->model('ImageModel');

		$aListe = $this->ImageModel->articles('action insertion sociale');

		//var_dump($aListe);
		// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
		$aView["media"] = $aListe;

		$this->load->view('entete');
		$this->load->view('action', $aView);
	}

/////////////////////////////////////////////

	public function chantier()
	{
		$this->load->model('ImageModel');

		$aListe = $this->ImageModel->articles('nos travaux en cours');

		// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
		$aView["media"] = $aListe;

		$this->load->view('entete');
		$this->load->view('chantier');
	}

	}
	
?>
<!-- http://localhost/ci/index.php/Upload/activite -->