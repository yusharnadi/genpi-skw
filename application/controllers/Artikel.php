<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
	$this->load->model('Artikel_model');

	$this->load->model('Kategori_model');
  }

  public function index()
  {
	  $this->load->library('pagination');

	  $config['base_url'] = base_url().'artikel/index/';

	  $config['total_rows'] = $this->db->count_all('artikel');

	  $config['per_page'] = 5;

	  $config['uri_segment'] = 3;

	  $config['num_links'] = 2;

	  // Membuat Style pagination untuk BootStrap v4

	  $config['first_link']       = 'Pertama';

	  $config['last_link']        = 'Terakhir';

	  $config['next_link']        = 'Selanjutnya';

	  $config['prev_link']        = 'Sebelumnya';

	  $config['full_tag_open']    = '<nav><ul class="pagination justify-content-center">';

	  $config['full_tag_close']   = '</ul></nav>';

	  $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';

	  $config['num_tag_close']    = '</span></li>';

	  $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';

	  $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';

	  $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';

	  $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';

	  $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';

	  $config['prev_tagl_close']  = '</span>Next</li>';

	  $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';

	  $config['first_tagl_close'] = '</span></li>';

	  $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';

	  $config['last_tagl_close']  = '</span></li>';

	  $this->pagination->initialize($config);

	  $offset  = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0 ;


	  $data['artikel']	=	$this->Artikel_model->get_part($config['per_page'], $offset);

	  $data['pagination'] = $this->pagination->create_links();

      //$data['kategori'] =   $this->Kategori_model->get_all();

	  $data['content']	=	'homepage/artikel/main';

      $data['sidebar']  =   'homepage/layout/sidebar';

	  $this->load->view('homepage/layout/master', $data);
  }

  public function detail($id=NULL)
  {
      if ($id != NULL && is_numeric($id)) {

          if ($this->Artikel_model->get_one($id) == '') {
             redirect('homepage');
         }
         else
         {
             $data['artikel']  =   $this->Artikel_model->get_one($id);

             $data['content']  =   'homepage/artikel/detail';

              $data['sidebar']  =   'homepage/layout/sidebar';

             $this->load->view('homepage/layout/master', $data);
         }

      }
      else
      {
          redirect('homepage');
      }

  }

}
