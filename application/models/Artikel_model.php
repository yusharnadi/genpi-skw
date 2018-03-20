<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model{

	protected $tabel = 'artikel';
    protected $key   = 'id_artikel';

	public function __construct()
	{
	parent::__construct();
	//Codeigniter : Write Less Do More
	}

	public function get_all()
	{
	    $this->db->join('kategori', 'kategori.id_kategori=artikel.id_kategori');

		$this->db->order_by('artikel.date','DESC');

		return $this->db->get($this->tabel)->result();
	}

	public function get_part($limit, $offset)
	{
	    $this->db->join('kategori', 'kategori.id_kategori=artikel.id_kategori');

		$this->db->order_by('artikel.date','DESC');

		return $this->db->get($this->tabel, $limit, $offset)->result();
	}

	public function get_one($id)
	{
	    $this->db->join('kategori', 'kategori.id_kategori=artikel.id_kategori');

		$this->db->where('artikel.id_artikel', $id);

		return $this->db->get($this->tabel)->row();
	}

	public function insert($data)
	{
	    return $this->db->insert($this->tabel, $data);
	}

	public function get_berita_utama()
	{
	    $this->db->join('kategori', 'kategori.id_kategori=artikel.id_kategori');

		$this->db->where('artikel.id_kategori', 1);

		$this->db->limit(3);

		$this->db->order_by('artikel.date','DESC');

		return $this->db->get($this->tabel)->result();
	}

	public function get_events_utama()
	{
	    $this->db->join('kategori', 'kategori.id_kategori=artikel.id_kategori');

		$this->db->where('artikel.id_kategori', 2);

		$this->db->limit(3);

		$this->db->order_by('artikel.date','DESC');

		return $this->db->get($this->tabel)->result();
	}

	public function update($id, $data)
	{
	    $this->db->where('id_artikel', $id);

		return $this->db->update($this->tabel, $data);
	}

	public function delete($id)
    {
        $this->db->where($this->key, $id);

        return $this->db->delete($this->tabel);
    }

}
