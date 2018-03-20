<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->model('Kategori_model');
        }

        public function index()
        {
                $data['kategori']   =   $this->Kategori_model->get_all();

                $data['content']    =   'admin/kategori/main';

                $this->load->view('admin/layout/master', $data);
        }

        public function actionInsert()
        {
                $val    =     array('kategori' => $this->input->post('kategori'));

                $data   =      $this->security->xss_clean($val);

                if ($_POST) {

                    $this->Kategori_model->insert($data);

                    $this->session->set_flashdata('message', 'Data berhasil ditambahkan.');

                    redirect ('admin/kategori');
                }

                $this->session->set_flashdata('error', 'Data gagal ditambahkan.');

                redirect('admin/kategori');
        }

        public function edit($id=NULL)
        {
            if ($id !=NULL) {

                $data['kategori']   =   $this->Kategori_model->get_one($id);

                $data['content']    =   'admin/kategori/edit';

                $this->load->view('admin/layout/master', $data);
            }
            else {
                redirect('admin/kategori');
            }
        }

        public function actionEdit($id=NULL)
        {
            if ($id != NULL) {

                $val    =     array('kategori' => $this->input->post('kategori'));

                $data   =      $this->security->xss_clean($val);

                $this->Kategori_model->update($id, $data);

                $this->session->set_flashdata('message', 'Data berhasil diubah.');

                redirect ('admin/kategori');
            }
            else
            {
                $this->session->set_flashdata('error', 'Data gagal diubah.');

                redirect('admin/kategori');
            }
        }

        public function delete($id=NULL)
        {
            if ($id != NULL) {

                $this->Kategori_model->delete($id);

                $this->session->set_flashdata('message', 'Data berhasil dihapus.');

                redirect ('admin/kategori');
            }
            else
            {
                $this->session->set_flashdata('error', 'Data gagal dihapus.');

                redirect('admin/kategori');
            }
        }
}
