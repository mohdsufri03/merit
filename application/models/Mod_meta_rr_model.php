<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Mod_meta_rr_model extends CI_Model
{

	public $id = 'mod_meta_id';
	public $table = 'mod_meta';
	public $order = 'DESC';

	function __construct(){
		parent::__construct();
	}

	// get all
	function get_all(){
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->table)->result();
	}

	// get data by id
	function get_by_id($id){
		$this->db->where($this->id, $id);
		return $this->db->get('mod_meta')->row();
	}
	
	// get total rows
	function total_rows($q = NULL) {
		// $this->db->like('mod_meta_id', $q);
		// $this->db->or_like('mod_meta_key', $q);
		// $this->db->or_like('mod_meta_name', $q);
		$this->db->where(array('mod_meta_key' => '_customer_form'));
		$this->db->from('mod_meta');
		return $this->db->count_all_results();
	}

	// get data with limit and search
	function get_limit_data($limit, $start = 0, $q = NULL) {
		$this->db->order_by('mod_meta_seqn', 'asc');
		$this->db->where(array('mod_meta_key' => '_customer_form'));
		$this->db->like('mod_meta_id', $q);
		// $this->db->or_like('mod_meta_key', $q);
		// $this->db->or_like('mod_meta_name', $q);
// 		$this->db->limit($limit, $start);
		return $this->db->get('mod_meta')->result();
	}

	// insert data
	function insert($data){
		$this->db->insert($this->table, $data);
	}

	// update data
	function update($id, $data){
		$this->db->where('mod_groups_id', $id);
		$this->db->update('mod_groups', $data);
	}

	// delete data
	function delete($id){
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
	}





	function get_mod_meta_name(){
		$this->db->order_by($this->id, $this->order);
		$this->db->where('mod_meta_key','_form_input');
		return $this->db->get('mod_meta')->result();
	}
	function insert_mod_meta($data){
		$this->db->insert('mod_meta', $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}
	function update_mod_meta($id,$data){
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $data);
	}
	function insert_mod_groups($opt){
		$this->db->insert('mod_groups', $opt);
	}
	
	// get data by id
	function get_groups_data_by_id($id){
		$this->db->where(array('mod_groups_parent_id'=> $id, 'mod_groups_enabled' => 1));
		$this->db->order_by('mod_groups_sqn', 'ASC');
		return $this->db->get('mod_groups')->result();
	}
	function get_rows_by_id($id){
		$query = $this->db->where(array('mod_groups_parent_id' => $id, 'mod_groups_enabled' => 1))->from('mod_groups')->count_all_results();
		return $query;
	}
}

/* End of file Mod_meta_rr_model.php */
/* Location: ./application/models/Mod_meta_rr_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-11-21 14:06:31 */
/* http://harviacode.com */