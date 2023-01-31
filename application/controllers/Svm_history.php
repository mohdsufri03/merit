<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Svm_history extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Svm_history_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'svm_history/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'svm_history/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'svm_history/index';
            $config['first_url'] = base_url() . 'svm_history/index';
        }
		$config['attributes'] = array('class' => 'btn btn-white');
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Svm_history_model->total_rows($q);
        $svm_history = $this->Svm_history_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'svm_history_data' => $svm_history,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$data['active_menu_id'] = '0';
        $this->load->view('svm_history/plug_svm_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Svm_history_model->get_by_id($id);
        if ($row) {
            $data = array(
		'plug_svm_id' => $row->plug_svm_id,
		'plug_svm_student_id' => $row->plug_svm_student_id,
		'plug_svm_value' => $row->plug_svm_value,
		'plug_svm_code' => $row->plug_svm_code,
	    );
            $this->load->view('svm_history/plug_svm_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('svm_history'));
        }
    }

    public function create() 
    {
        $this->load->model('student_model');
        $data = array(
            'button' => 'Create',
            'action' => site_url('svm_history/create_action'),
	    'plug_svm_id' => set_value('plug_svm_id'),
	    'plug_svm_student_id' => set_value('plug_svm_student_id'),
	    'plug_svm_value' => set_value('plug_svm_value'),
	    'plug_svm_code' => set_value('plug_svm_code'),
	    'plug_student' => $this->student_model->get_all(),
	);
        $this->load->view('svm_history/plug_svm_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'plug_svm_student_id' => $this->input->post('plug_svm_student_id',TRUE),
		'plug_svm_value' => $this->input->post('plug_svm_value',TRUE),
		'plug_svm_code' => $this->input->post('plug_svm_code',TRUE),
	    );

            $this->Svm_history_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('svm_history'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Svm_history_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('svm_history/update_action'),
		'plug_svm_id' => set_value('plug_svm_id', $row->plug_svm_id),
		'plug_svm_student_id' => set_value('plug_svm_student_id', $row->plug_svm_student_id),
		'plug_svm_value' => set_value('plug_svm_value', $row->plug_svm_value),
		'plug_svm_code' => set_value('plug_svm_code', $row->plug_svm_code),
	    );
            $this->load->view('svm_history/plug_svm_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('svm_history'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('plug_svm_id', TRUE));
        } else {
            $data = array(
		'plug_svm_student_id' => $this->input->post('plug_svm_student_id',TRUE),
		'plug_svm_value' => $this->input->post('plug_svm_value',TRUE),
		'plug_svm_code' => $this->input->post('plug_svm_code',TRUE),
	    );

            $this->Svm_history_model->update($this->input->post('plug_svm_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('svm_history'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Svm_history_model->get_by_id($id);

        if ($row) {
            $this->Svm_history_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('svm_history'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('svm_history'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('plug_svm_student_id', 'plug svm student id', 'trim|required');
	$this->form_validation->set_rules('plug_svm_value', 'plug svm value', 'trim|required');
	$this->form_validation->set_rules('plug_svm_code', 'plug svm code', 'trim');

	$this->form_validation->set_rules('plug_svm_id', 'plug_svm_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Svm_history.php */
/* Location: ./application/controllers/Svm_history.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-01-12 17:45:58 */
/* http://harviacode.com */