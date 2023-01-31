<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Svm_record extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model('Svm_history_model');
        //$this->load->library('form_validation');
    }

    public function index(){
        $this->load->model('svm_history_model');
        $data['list'] = $this->svm_history_model->get_total_merit_list();
        
        //print_r($data);
        //print_r(json_encode($data));
        
        $this->load->view('svm_history/plug_svm_report',$data);
    }
}