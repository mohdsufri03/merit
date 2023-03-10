<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mod_meta_model extends CI_Model
{

    public $table = 'mod_meta';
    public $id = 'mod_meta_id';
    public $order = 'ASC';

    function __construct(){
        parent::__construct();
    }

    // get all
    function get_all(){
        $this->db->order_by('mod_meta_seqn', $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id){
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
    	
    	$this->db->select('mod_meta.*,COUNT(mod_meta_id) as mod_meta_count');
    	$this->db->group_by('mod_meta_key');
    	$this->db->from($this->table);
    	
    	$this->db->order_by('mod_meta_seqn', $this->order);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->select('mod_meta.*,COUNT(mod_meta_id) as mod_meta_count');

    	
    	$this->db->group_by('mod_meta_key');
    	
    	$this->db->limit($limit, $start);
    	
    	$this->db->order_by('mod_meta_seqn', $this->order);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    // update data
    function update($id, $data){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

	function get_form_field(){
		// $this->db->select('mod_meta.mod_meta_id, mod_meta.mod_meta_key, mod_meta.mod_meta_name, mod_meta.mod_meta_params, mod_groups.mod_groups_name, mod_groups.mod_groups_meta_type, mod_groups.mod_groups_parent_id, mod_groups.mod_groups_enabled');
		// $this->db->join('mod_groups', 'mod_meta.mod_meta_id = mod_groups.mod_groups_parent_id', 'right');
		$this->db->order_by('mod_meta_id', 'ASC');
		$this->db->where(array('mod_meta_key'=>'_customer_form'));
		return $this->db->get('mod_meta')->result();
	}
	function get_form_options($id){
		$this->db->where('mod_groups_parent_id',$id);
		return $this->db->get('mod_groups')->result();
	}
	function get_form_option_total($id){
		$this->db->where('mod_groups_parent_id',$id);
		return $this->db->get('mod_groups')->num_rows();
	}









	function insert_play($data){
		$this->db->insert('play_table', $data);
	}
	function get_mod_groups_rows_by_id($id){
		$query = $this->db->where(array('mod_groups_parent_id' => $id, 'mod_groups_enabled' => 1))->from('mod_groups')->count_all_results();
		return $query;
	}
	function get_distinct_mod_parent_id($id){
		$this->db->select('mod_groups_parent_id');
		$this->db->where('mod_groups_parent_id', $id);
		$this->db->distinct();
		return $this->db->get('mod_groups')->result();
	}


}

/* End of file Mod_meta_model.php */
/* Location: ./application/models/Mod_meta_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-08-22 14:10:22 */
/* http://harviacode.com */