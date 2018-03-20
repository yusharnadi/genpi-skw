<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    protected $tabel = 'kategori';
    protected $key   = 'id_kategori';

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
     }

	public function get_all()
	{
        $this->db->select('*');

        return $this->db->get($this->tabel)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->tabel, $data);
    }

    public function get_one($id)
    {
        $this->db->where($this->key, $id);

        return $this->db->get($this->tabel)->row();
    }

    public function update($id, $data)
    {
        $this->db->where($this->key, $id);

        return $this->db->update($this->tabel, $data);
    }

    public function delete($id)
    {
        $this->db->where($this->key, $id);

        return $this->db->delete($this->tabel);
    }
}
