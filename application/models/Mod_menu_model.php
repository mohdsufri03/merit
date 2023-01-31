<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mod_menu_model extends CI_Model{
    
    public $table = 'mod_groups';
    public $id = 'mod_groups_id';
    public $order = 'DESC';

    function __construct(){
        parent::__construct();
    }
    function get_mainmenu(){
        //$this->db->select('mod_groups.mod_groups_id,mod_groups.mod_groups_name,mod_groups.mod_groups_parent_id');
        $this->db->join('mod_meta', 'mod_meta.mod_meta_id = mod_groups.mod_groups_meta_type', 'left');
        $this->db->where('mod_groups_meta_type',2);
        $this->db->where_not_in('mod_groups_id', $this->exclusionbyUserGroup());
        $this->db->order_by('mod_groups_sqn', 'ASC');
        // $this->db->from($this->table);
        return $this->db->get($this->table)->result_array();
    }
    
    function exclusionbyUserGroup() {
        $group = $this->session->userdata('group_id');
        if ($group == 2) {
            return array(12,102,11,103);
        } else {
            return array(0);
        }
    }
}