<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
	$this->load->model('Artikel_model');

	$this->load->model('Kategori_model');
  }

  public function index()
  {
	  $data['artikel']	=	$this->Artikel_model->get_berita_utama();

	  $data['events']	=	$this->Artikel_model->get_events_utama();

	  $data['content']	=	'homepage/home/main';

	  $this->load->view('homepage/layout/master', $data);
  }

 

}
