<?php if (!defined('BASEPATH'))    exit('No direct script access allowed');

class Mod_products extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('Mod_groups_model');
        // $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('mod_products/index');
    }
    public function read($id){
        
    }
}