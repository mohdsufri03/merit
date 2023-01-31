<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mod_groups extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_groups_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        /*
        if($this->input->get('q', TRUE)<> ''){
            $q = urldecode($this->input->get('q', TRUE));
        }else{
            $q = null;
        }*/
        //$q ="q=c&are=green+and+red";
        //$q =$this->input->get('q');
        //$q = urldecode((string)$this->input->get('q', TRUE));
        //$q = (string)$q;
        //print_r($q);
        $q = $this->input->get('q', TRUE);
        
        //$this->output->enable_profiler(TRUE);
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'mod_groups/index?q=' . ((string)$q);
            $config['first_url'] = base_url() . 'mod_groups/index?q=' . ((string)$q);
        } else {
            $config['base_url'] = base_url() . 'mod_groups/index';
            $config['first_url'] = base_url() . 'mod_groups/index';
        }
		//$config['attributes'] = array('class' => 'btn');
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mod_groups_model->total_rows($q);
        $mod_groups = $this->Mod_groups_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mod_groups_data' => $mod_groups,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$data['active_menu_id'] = '0';
        $this->load->view('mod_groups/mod_groups_list', $data);
        //print_r($q);
    }

    public function read($id) 
    {
        $row = $this->Mod_groups_model->get_by_id($id);
        if ($row) {
            $data = array(
		'mod_groups_id' => $row->mod_groups_id,
		'mod_groups_name' => $row->mod_groups_name,
		'mod_groups_key' => $row->mod_groups_key,
		'mod_groups_meta_type' => $row->mod_groups_meta_type,
		'mod_groups_parent_id' => $row->mod_groups_parent_id,
		'mod_groups_icon' => $row->mod_groups_icon,
		'mod_groups_sqn' => $row->mod_groups_sqn,
		'mod_groups_enabled' => $row->mod_groups_enabled,
	    );
            $this->load->view('mod_groups/mod_groups_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mod_groups'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mod_groups/create_action'),
	    'mod_groups_id' => set_value('mod_groups_id'),
	    'mod_groups_name' => set_value('mod_groups_name'),
	    'mod_groups_key' => set_value('mod_groups_key'),
	    'mod_groups_meta_type' => set_value('mod_groups_meta_type'),
	    'mod_groups_parent_id' => set_value('mod_groups_parent_id'),
	    'mod_groups_icon' => set_value('mod_groups_icon'),
	    'mod_groups_sqn' => set_value('mod_groups_sqn'),
	    'mod_groups_enabled' => set_value('mod_groups_enabled'),
	);
        $this->load->view('mod_groups/mod_groups_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'mod_groups_name' => $this->input->post('mod_groups_name',TRUE),
		'mod_groups_key' => $this->input->post('mod_groups_key',TRUE),
		'mod_groups_meta_type' => $this->input->post('mod_groups_meta_type',TRUE),
		'mod_groups_parent_id' => $this->input->post('mod_groups_parent_id',TRUE),
		'mod_groups_icon' => $this->input->post('mod_groups_icon',TRUE),
		'mod_groups_sqn' => $this->input->post('mod_groups_sqn',TRUE),
		'mod_groups_enabled' => $this->input->post('mod_groups_enabled',TRUE),
	    );

            $this->Mod_groups_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mod_groups'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mod_groups_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mod_groups/update_action'),
		'mod_groups_id' => set_value('mod_groups_id', $row->mod_groups_id),
		'mod_groups_name' => set_value('mod_groups_name', $row->mod_groups_name),
		'mod_groups_key' => set_value('mod_groups_key', $row->mod_groups_key),
		'mod_groups_meta_type' => set_value('mod_groups_meta_type', $row->mod_groups_meta_type),
		'mod_groups_parent_id' => set_value('mod_groups_parent_id', $row->mod_groups_parent_id),
		'mod_groups_icon' => set_value('mod_groups_icon', $row->mod_groups_icon),
		'mod_groups_sqn' => set_value('mod_groups_sqn', $row->mod_groups_sqn),
		'mod_groups_enabled' => set_value('mod_groups_enabled', $row->mod_groups_enabled),
	    );
            $this->load->view('mod_groups/mod_groups_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mod_groups'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('mod_groups_id', TRUE));
        } else {
            $data = array(
		'mod_groups_name' => $this->input->post('mod_groups_name',TRUE),
		'mod_groups_key' => $this->input->post('mod_groups_key',TRUE),
		'mod_groups_meta_type' => $this->input->post('mod_groups_meta_type',TRUE),
		'mod_groups_parent_id' => $this->input->post('mod_groups_parent_id',TRUE),
		'mod_groups_icon' => $this->input->post('mod_groups_icon',TRUE),
		'mod_groups_sqn' => $this->input->post('mod_groups_sqn',TRUE),
		'mod_groups_enabled' => $this->input->post('mod_groups_enabled',TRUE),
	    );

            $this->Mod_groups_model->update($this->input->post('mod_groups_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mod_groups'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mod_groups_model->get_by_id($id);

        if ($row) {
            $this->Mod_groups_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mod_groups'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mod_groups'));
        }
    }
    public function child($id){
        $data['child'] = $this->Mod_groups_model->get_group_by_meta($id);
        
        $this->make_tree($data['child'],'mod_groups_parent_id','mod_groups_id');
        //$this->load->view('mod_groups/mod_groups_child',$data);
    }
    
    private function make_tree($arr,$parent_column,$primary_key){
        $is_root = array();
        $is_child = array();
        
        $result = array();
        
        foreach($arr as $key=>$av){
            //If Root
            if($av[$parent_column]==0){
                array_push($is_root,$av);
            //If non-root
            }else{
                $is_child[$av[$parent_column]] = isset($is_child[$av[$parent_column]]) ? $is_child[$av[$parent_column]]:array();
                array_push($is_child[$av[$parent_column]],$av);
            }
        }
        //List root item and push child into it
        foreach($is_root as $rv_key=>$rv){
            //print_r($rv);
            //$rv
        }
        
        print_r(json_encode($is_child[12]));
        
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('mod_groups_name', 'mod groups name', 'trim|required');
	$this->form_validation->set_rules('mod_groups_key', 'mod groups key', 'trim|required');
	$this->form_validation->set_rules('mod_groups_meta_type', 'mod groups meta type', 'trim|required');
	$this->form_validation->set_rules('mod_groups_parent_id', 'mod groups parent id', 'trim|required');
	$this->form_validation->set_rules('mod_groups_icon', 'mod groups icon', 'trim|required');
	$this->form_validation->set_rules('mod_groups_sqn', 'mod groups sqn', 'trim|required');
	$this->form_validation->set_rules('mod_groups_enabled', 'mod groups enabled', 'trim|required');

	$this->form_validation->set_rules('mod_groups_id', 'mod_groups_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mod_groups.php */
/* Location: ./application/controllers/Mod_groups.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-08-24 13:53:49 */
/* http://harviacode.com */