<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tree extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_groups_model');
        $this->load->library('form_validation');
    }

    public function index(){
        //print_r($this->session->userdata('menu'));
        $this->load->library('maketree');
        $this->load->model('Mod_menu_model');
        $menu = $this->Mod_menu_model->get_mainmenu();
        
        $tree_result = $this->maketree->result($menu,'mod_groups_parent_id','mod_groups_id');
        //$t_result = $this->maketree->buildTree($menu);
        //$navigation = new NavTree($data);
        print_r(json_encode($tree_result));
        //$result = $this->BuildTree->minus(1,2);
        // echo $result;
        //$data['child'] = $this->Mod_groups_model->get_group_by_meta(2);
        
        //$this->make_tree($data['child'],'mod_groups_parent_id','mod_groups_id');
        
        //$built_tree = $this->build_tree($data['child']);
    }
    private function make_tree($arr,$parent_column,$primary_key){
        $deep_limit = 3;
        
        $is_root = array();
        $is_child = array();
        
        $result = array();
        
        $tree_root = $this->tree_node($arr,$parent_column,'mod_groups_id');
        
        print_r(json_encode($tree_root));
    }
    private function tree_node($arr,$parent_column,$primary_key){

        $GLOBALS["primary_key"] = $primary_key;
        //print_r($primary_key);
        //$primary_key = '';
        $grouped = [];
        foreach ($arr as $node){
            $grouped[$node[$parent_column]][] = $node;
        }
        //print_r(json_encode($grouped));
        $fnBuilder = function($siblings,$primary_key=null) use (&$fnBuilder, $grouped) {

            $primary_key = "mod_groups_id";
            foreach ($siblings as $k => $sibling) {
                $id = $sibling[$primary_key];
                if(isset($grouped[$id])) {
                    $sibling['children'] = $fnBuilder($grouped[$id],$primary_key);
                }
                $siblings[$k] = $sibling;
            }
            return $siblings;
        };

        return $fnBuilder($grouped[0]);
    }
    function _build_tree(&$items, $parentId = null) {
        $treeItems = [];
        foreach ($items as $idx => $item) {
            if((empty($parentId) && empty($item['parent_id'])) || (!empty($item['parent_id']) && !empty($parentId) && $item['parent_id'] == $parentId)) {
                $items[$idx]['children'] = $this->build_tree($items, $items[$idx]['id']);
                $treeItems []= $items[$idx];
            }
        }
    
        return $treeItems;
    }
    function bt(){
        $this->load->library('btapi');
        
        $api = new btapi();
        //获取面板日志
        $r_data = $api->GetLogs();
        //输出JSON数据到浏览器
        echo json_encode($r_data);
    }
}