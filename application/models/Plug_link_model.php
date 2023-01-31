<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Plug_link_model extends CI_Model
{

	public $table = 'plug_link';
	public $id = 'plug_link_id';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}
	
	function get_all(){
		// $this->db->order_by($this->table, $this->order);
		return $this->db->get($this->table)->result();
	}
	
	// get total rows
    function total_rows($q = NULL) {
        $this->db->like('plug_link_id', $q);
	$this->db->or_like('plug_link_unique', $q);
	$this->db->or_like('plug_link_path', $q);
	$this->db->or_like('plug_link_type', $q);
	$this->db->or_like('plug_link_reference', $q);
	$this->db->or_like('plug_link_expiry', $q);
	$this->db->or_like('plug_link_access_count', $q);
	$this->db->or_like('plug_link_fulfilled', $q);
	$this->db->or_like('plug_link_status', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }
    
    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('plug_link_id', $q);
	$this->db->or_like('plug_link_unique', $q);
	$this->db->or_like('plug_link_path', $q);
	$this->db->or_like('plug_link_type', $q);
	$this->db->or_like('plug_link_reference', $q);
	$this->db->or_like('plug_link_expiry', $q);
	$this->db->or_like('plug_link_access_count', $q);
	$this->db->or_like('plug_link_fulfilled', $q);
	$this->db->or_like('plug_link_status', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
	
	function insert($data){
		$this->db->insert($this->table, $data);
	}
	
	function get_plug_link_unique($unique_id){
		$this->db->where('plug_link_unique',$unique_id);
		return $this->db->get($this->table)->row();
	}
	
	function update($unique_id, $data){
		$this->db->where('plug_link_unique', $unique_id);
		$this->db->update($this->table, $data);
	}
	
}

?>