<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index(){
	    //$this->session->all_userdata();
	    $this->load->library('maketree');
	    $this->load->model('Mod_menu_model');
        $menu = $this->Mod_menu_model->get_mainmenu();
        $tree_result = $this->maketree->result($menu,'mod_groups_parent_id','mod_groups_id');
        
	    $this->session->set_userdata(array('menu'=>$tree_result));
	    //$this->session->sess_destroy();
	    //print_r($this->session->all_userdata());
		$this->load->view('welcome/index');
	}
	public function ajax(){
        $this->load->view('welcome/ajax');
	}
	public function user_info_json(){
	    $option = array();
	    $opt['name'] = '是';
	    $opt['val'] = 1;
	    array_push($option,$opt);
	    $opt['name'] = '否';
	    $opt['val'] = 0;
	    array_push($option,$opt);
	    
	    
	    $data['name'] = 'Customer Condition Pregnancy';
	    $data['name_display'] = '是否怀孕生育';
	    $data['grouping'] = '1';
	    $data['option'] = $option;
	    
	    print_r(json_encode($data));
	    
	    
	}
}
