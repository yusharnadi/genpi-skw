<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    //Codeigniter : Write Less Do More
    $this->load->library('form_validation');
	$this->load->model('Artikel_model');

	$this->load->model('Kategori_model');
  }

  public function index()
  {
	  $data['artikel']	=	$this->Artikel_model->get_all();

	  $data['content']	=	'admin/artikel/main';

	  $this->load->view('admin/layout/master', $data);
  }

  public function create()
  {
	  $data['kategori']	=	$this->Kategori_model->get_all();

	  $data['content']	=	'admin/artikel/create';

	  $this->load->view('admin/layout/master', $data);
  }

  public function actionCreate()
  {
	  $config['upload_path']          = './uploads/';
	  $config['allowed_types']        = 'jpeg|jpg|png';
	  $config['max_size']             = 2000;
	  $config['max_width']            = 0;
	  $config['max_height']           = 0;


	  if ($_POST) {

			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('gambar_utama')) {

				$error	=	$this->upload->display_errors();

				$this->session->set_flashdata('error', $error);

				redirect('admin/artikel/create');
			}
			else
			{

                $this->_validate();

                if ($this->form_validation->run() == FALSE) {

                    $this->create();
                }
                else
                {
                    $path			=	$this->upload->data('file_name');

    				$data_upload	=	array('judul' => $this->input->post('judul'),
    			 								'id_kategori' => $this->input->post('id_kategori'),
    											'konten' => $this->input->post('konten'),
    											'gambar_utama' => $path,
    											'date' => date_format(new dateTime('now'), 'Y-m-d H:i:s')
    										);

    				$this->Artikel_model->insert($data_upload);

    				$this->session->set_flashdata('message', 'Artikel berhasil dibuat.');

    				redirect('admin/artikel/create');
                }

			}
	  }
	  else
	  {
	  		redirect('admin/artikel');
	  }

  }

  public function edit($id=NULL)
  {
	  if ($id !=NULL) {

		  $data['kategori']		=   $this->Kategori_model->get_all();

		  $data['artikel']		=	$this->Artikel_model->get_one($id);

		  $data['content']		=   'admin/artikel/edit';

		  $this->load->view('admin/layout/master', $data);
	  }
	  else {
		  redirect('admin/artikel');
	  }
  }

  public function actionEdit($id=NULL)
  {
      if ($id != NULL) {
          $config['upload_path']          = './uploads/';
    	  $config['allowed_types']        = 'jpeg|jpg|png';
    	  $config['max_size']             = 2000;
    	  $config['max_width']            = 0;
    	  $config['max_height']           = 0;

          $this->load->library('upload', $config);

          if (! $this->upload->do_upload('gambar_utama')) {

              $error	=	$this->upload->display_errors();

              $this->session->set_flashdata('error', $error);

              redirect('admin/artikel/edit');
          }
          else
          {

              $this->_validate();

              if ($this->form_validation->run() == FALSE) {

                  $this->edit($id);
              }
              else
              {
                  $path			=	$this->upload->data('file_name');

                  $data_upload	=	array('judul' => $this->input->post('judul'),
                                              'id_kategori' => $this->input->post('id_kategori'),
                                              'konten' => $this->input->post('konten'),
                                              'gambar_utama' => $path
                                          );

                  $this->Artikel_model->update($id, $data_upload);

                  $this->session->set_flashdata('message', 'Artikel berhasil diubah.');

                  redirect('admin/artikel');
              }

          }
      }
      else
      {
          redirect('admin/artikel');
      }
  }

  public function delete($id=NULL)
  {
	  if ($id != NULL) {

		  $this->Artikel_model->delete($id);

		  $this->session->set_flashdata('message', 'Artikel berhasil dihapus.');

		  redirect ('admin/artikel');
	  }
	  else
	  {
		  $this->session->set_flashdata('error', 'Artikel gagal dihapus.');

		  redirect('admin/artikel');
	  }
  }

  private function _validate()
  {
      $this->form_validation->set_rules('judul', 'Judul', 'required');
      $this->form_validation->set_rules('id_kategori', 'kategori', 'required|numeric');
      $this->form_validation->set_rules('konten', 'Konten Artikel', 'required');
  }








}
