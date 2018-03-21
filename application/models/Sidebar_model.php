<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidebar_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_last_artikel()
  {
	  $this->db->where('id_kategori', 1);

	  $this->db->order_by('date', 'DESC');

	  return $this->db->get('artikel',5)->result();
  }

  public function get_last_events()
  {
	  $this->db->where('id_kategori', 2);

	  $this->db->order_by('date', 'DESC');
	  
	  return $this->db->get('artikel',5)->result();
  }

}
