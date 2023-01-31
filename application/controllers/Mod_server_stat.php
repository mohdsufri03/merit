<?php if (!defined('BASEPATH'))    exit('No direct script access allowed');

class Mod_server_stat extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('Mod_groups_model');
        // $this->load->library('form_validation');
    }

    public function index(){
    }
    public function json(){
        $this->load->library('btapi');
        
        $api = new btapi();
        //获取面板日志
        $r_data['stat'] = $api->GetStat();
        $r_data['disk'] = $api->GetDisk();
        //输出JSON数据到浏览器
        echo json_encode($r_data);
        //echo "11";
    }
}