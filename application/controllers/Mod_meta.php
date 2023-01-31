<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mod_meta extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_meta_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		
		$data = array(
			'action'						=> site_url('mod_meta/create_action'),
			'get_form_field'				=> $this->Mod_meta_model->get_form_field(),
			// 'get_required_optional'			=> $this->Mod_meta_model->get_required_optional(),
		);
		
		$get_form_field = $this->Mod_meta_model->get_form_field();
		$this->load->view('mod_meta/mod_meta_list', $data);
	}

	public function create_action_test(){

		foreach($this->input->post() as $key => $val){
			if(substr($key, (strpos($key,'_')+1) , (strpos($key,'_')-1)) == 'n'){
				$mod_meta_names['mod_meta_name'][] = $val;
			}
			if(substr($key, (strpos($key,'_')+1) , (strpos($key,'_')-1)) == 'r'){
				$mod_meta_required['required'][] = $val;
			}
			if(substr($key, (strpos($key,'_')+1) , (strpos($key,'_')-1)) == 's'){
				$mod_meta_select['select'][] = $val;
			}
			if(substr($key, (strpos($key,'_')+1) , (strpos($key,'_')-1)) == 'o') {
				$mod_groups_ids[] = substr($key,0,(strpos($key,'_')));
				$mod_groups_names['mod_groups_name'][] = substr($key,0,(strpos($key,'_'))). "_" . $val;
				$mod_groups_value['mod_groups_name'][] = $val;
			}
			if(substr($key, (strpos($key,'_')+1) , (strpos($key,'_')-1)) == 'o' && substr($key,-1) == 'c'){
				$option_count['option_count'][] = $val;
				// echo $key . "<br>";
			}
		}


		// ----- MOD META (Old Item) -----
		for($i=0;$i<sizeof($mod_meta_names['mod_meta_name']);$i++){
			$mod_meta_id = $this->input->post('mod_meta_id'.$i);
			$mod_meta_name = $mod_meta_names['mod_meta_name'][$i];
			$mod_meta_params = '{"required":"' . $mod_meta_required['required'][$i] . '","select":"' . $mod_meta_select['select'][$i] . '"}';
			$data = array(
				'mod_meta_id'				=> $mod_meta_id,
				'mod_meta_name'				=> $mod_meta_name,
				'mod_meta_params'			=> $mod_meta_params,
			);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
		}




		// ----- MOD GROUPS (Old Item) -----
		for($i=0;$i<sizeof($mod_groups_names['mod_groups_name']);$i++){
			$mod_groups_id = $mod_groups_ids[$i];
			// echo $mod_groups_value['mod_groups_name'][$i];
			if(substr($mod_groups_names['mod_groups_name'][$i],0,(strpos($key,'_'))) == $mod_groups_ids[$i]){
				$mod_groups_name = substr($mod_groups_names['mod_groups_name'][$i],(strpos($key,'_'))+1);
				$dat = array(
					'mod_groups_parent_id'			=> $mod_groups_id,
					'mod_groups_name'				=> $mod_groups_names['mod_groups_name'][$i]
				);
			}

		}




		foreach(array_unique($mod_groups_ids) as $mod_groups_id){
			$mod_groups_count[] = $this->Mod_meta_model->get_mod_groups_rows_by_id($mod_groups_id);
		}
		echo $mod_groups_count;








	}






















    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mod_meta/create_action'),
    	    'mod_meta_id' => set_value('mod_meta_id'),
    	    'mod_meta_key' => set_value('mod_meta_key'),
    	    'mod_meta_name' => set_value('mod_meta_name'),
    	    'mod_meta_params' => set_value('mod_meta_params'),
    	    'mod_meta_groupby_count' => set_value('mod_meta_groupby_count'),
    	    'mod_meta_core' => set_value('mod_meta_core'),
    	    'mod_meta_seqn' => set_value('mod_meta_seqn'),
    	    'mod_meta_enabled' => set_value('mod_meta_enabled'),
	);
        $this->load->view('mod_meta/mod_meta_form', $data);
    }

	public function create_action() 
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = array(
		'mod_meta_key' => $this->input->post('mod_meta_key',TRUE),
		'mod_meta_name' => $this->input->post('mod_meta_name',TRUE),
		'mod_meta_params' => $this->input->post('mod_meta_params',TRUE),
		'mod_meta_groupby_count' => $this->input->post('mod_meta_groupby_count',TRUE),
		'mod_meta_core' => $this->input->post('mod_meta_core',TRUE),
		'mod_meta_seqn' => $this->input->post('mod_meta_seqn',TRUE),
		'mod_meta_enabled' => $this->input->post('mod_meta_enabled',TRUE),
		);

			$this->Mod_meta_model->insert($data);
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('mod_meta'));
		}
	}

    public function update($id) 
    {
        $row = $this->Mod_meta_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mod_meta/update_action'),
        		'mod_meta_id' => set_value('mod_meta_id', $row->mod_meta_id),
        		'mod_meta_key' => set_value('mod_meta_key', $row->mod_meta_key),
        		'mod_meta_name' => set_value('mod_meta_name', $row->mod_meta_name),
        		'mod_meta_params' => set_value('mod_meta_params', $row->mod_meta_params),
        		'mod_meta_groupby_count' => set_value('mod_meta_groupby_count', $row->mod_meta_groupby_count),
        		'mod_meta_core' => set_value('mod_meta_core', $row->mod_meta_core),
        		'mod_meta_seqn' => set_value('mod_meta_seqn', $row->mod_meta_seqn),
        		'mod_meta_enabled' => set_value('mod_meta_enabled', $row->mod_meta_enabled),
	    );
            $this->load->view('mod_meta/mod_meta_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mod_meta'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('mod_meta_id', TRUE));
        } else {
            $data = array(
        		'mod_meta_key' => $this->input->post('mod_meta_key',TRUE),
        		'mod_meta_name' => $this->input->post('mod_meta_name',TRUE),
        		'mod_meta_params' => $this->input->post('mod_meta_params',TRUE),
        		'mod_meta_groupby_count' => $this->input->post('mod_meta_groupby_count',TRUE),
        		'mod_meta_core' => $this->input->post('mod_meta_core',TRUE),
        		'mod_meta_seqn' => $this->input->post('mod_meta_seqn',TRUE),
        		'mod_meta_enabled' => $this->input->post('mod_meta_enabled',TRUE),
	    );

            $this->Mod_meta_model->update($this->input->post('mod_meta_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mod_meta'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mod_meta_model->get_by_id($id);

        if ($row) {
            $this->Mod_meta_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mod_meta'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mod_meta'));
        }
    }
    public function meta_child($key){
        $this->load->model('Mod_meta_child_model');
        $dat = $this->Mod_meta_child_model->get_all($key);
        $data['id'] = $key;
        $data['dat'] = $dat;
        //print_r(json_encode($data));
        $this->load->view('mod_meta/mod_meta_child',$data);
    }
    public function group_submit(){
        print_r(json_encode($this->input->post()));
    }
    public function child_create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        		'mod_meta_key' => $this->input->post('mod_meta_key',TRUE),
        		'mod_meta_name' => $this->input->post('mod_meta_name',TRUE),
	    );

            $affected = $this->Mod_meta_model->insert($data);
            if($affected>0){
                $this->session->set_flashdata('message', 'Create Record Success');
            }
            
            //print_r();
            redirect(site_url('mod_meta/meta_child/'.$data['mod_meta_key']));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('mod_meta_key', 'mod meta key', 'trim|required');
	$this->form_validation->set_rules('mod_meta_name', 'mod meta name', 'trim|required');
	$this->form_validation->set_rules('mod_meta_params', 'mod meta params', 'trim');
	$this->form_validation->set_rules('mod_meta_groupby_count', 'mod meta groupby count', 'trim');
	$this->form_validation->set_rules('mod_meta_core', 'mod meta core', 'trim');
	$this->form_validation->set_rules('mod_meta_seqn', 'mod meta seqn', 'trim');
	$this->form_validation->set_rules('mod_meta_enabled', 'mod meta enabled', 'trim');

	$this->form_validation->set_rules('mod_meta_id', 'mod_meta_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mod_meta.php */
/* Location: ./application/controllers/Mod_meta.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-08-22 14:10:22 */
/* http://harviacode.com */