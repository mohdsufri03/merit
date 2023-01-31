<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'student/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'student/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'student/index';
            $config['first_url'] = base_url() . 'student/index';
        }
		$config['attributes'] = array('class' => 'btn btn-white');
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Student_model->total_rows($q);
        $student = $this->Student_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'student_data' => $student,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$data['active_menu_id'] = '0';
        $this->load->view('student/plug_customer_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Student_model->get_by_id($id);
        if ($row) {
            $data = array(
		'plug_customer_id' => $row->plug_customer_id,
		'plug_customer_name' => $row->plug_customer_name,
		'plug_customer_last_name' => $row->plug_customer_last_name,
		'plug_customer_ic' => $row->plug_customer_ic,
		'plug_customer_gender_meta' => $row->plug_customer_gender_meta,
		'plug_customer_occupation' => $row->plug_customer_occupation,
		'plug_customer_phone' => $row->plug_customer_phone,
		'plug_customer_email' => $row->plug_customer_email,
		'plug_customer_marital_meta' => $row->plug_customer_marital_meta,
		'plug_customer_height' => $row->plug_customer_height,
		'plug_customer_weight' => $row->plug_customer_weight,
		'plug_customer_address' => $row->plug_customer_address,
		'plug_customer_data' => $row->plug_customer_data,
		'plug_customer_media' => $row->plug_customer_media,
		'plug_customer_status' => $row->plug_customer_status,
	    );
            $this->load->view('student/plug_customer_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('student'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('student/create_action'),
	    'plug_customer_id' => set_value('plug_customer_id'),
	    'plug_customer_name' => set_value('plug_customer_name'),
	    'plug_customer_last_name' => set_value('plug_customer_last_name'),
	    'plug_customer_ic' => set_value('plug_customer_ic'),
	    'plug_customer_gender_meta' => set_value('plug_customer_gender_meta'),
	    'plug_customer_occupation' => set_value('plug_customer_occupation'),
	    'plug_customer_phone' => set_value('plug_customer_phone'),
	    'plug_customer_email' => set_value('plug_customer_email'),
	    'plug_customer_marital_meta' => set_value('plug_customer_marital_meta'),
	    'plug_customer_height' => set_value('plug_customer_height'),
	    'plug_customer_weight' => set_value('plug_customer_weight'),
	    'plug_customer_address' => set_value('plug_customer_address'),
	    'plug_customer_data' => set_value('plug_customer_data'),
	    'plug_customer_media' => set_value('plug_customer_media'),
	    'plug_customer_status' => set_value('plug_customer_status'),
	);
        $this->load->view('student/plug_customer_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'plug_customer_name' => $this->input->post('plug_customer_name',TRUE),
		'plug_customer_last_name' => $this->input->post('plug_customer_last_name',TRUE),
		'plug_customer_ic' => $this->input->post('plug_customer_ic',TRUE),
	    );

            $this->Student_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('student'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Student_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('student/update_action'),
		'plug_customer_id' => set_value('plug_customer_id', $row->plug_customer_id),
		'plug_customer_name' => set_value('plug_customer_name', $row->plug_customer_name),
		'plug_customer_last_name' => set_value('plug_customer_last_name', $row->plug_customer_last_name),
		'plug_customer_ic' => set_value('plug_customer_ic', $row->plug_customer_ic),
	    );
            $this->load->view('student/plug_customer_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('student'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('plug_customer_id', TRUE));
        } else {
            $data = array(
		'plug_customer_name' => $this->input->post('plug_customer_name',TRUE),
		'plug_customer_last_name' => $this->input->post('plug_customer_last_name',TRUE),
		'plug_customer_ic' => $this->input->post('plug_customer_ic',TRUE),
		'plug_customer_gender_meta' => $this->input->post('plug_customer_gender_meta',TRUE),
		'plug_customer_occupation' => $this->input->post('plug_customer_occupation',TRUE),
		'plug_customer_phone' => $this->input->post('plug_customer_phone',TRUE),
		'plug_customer_email' => $this->input->post('plug_customer_email',TRUE),
		'plug_customer_marital_meta' => $this->input->post('plug_customer_marital_meta',TRUE),
		'plug_customer_height' => $this->input->post('plug_customer_height',TRUE),
		'plug_customer_weight' => $this->input->post('plug_customer_weight',TRUE),
		'plug_customer_address' => $this->input->post('plug_customer_address',TRUE),
		'plug_customer_data' => $this->input->post('plug_customer_data',TRUE),
		'plug_customer_media' => $this->input->post('plug_customer_media',TRUE),
		'plug_customer_status' => $this->input->post('plug_customer_status',TRUE),
	    );

            $this->Student_model->update($this->input->post('plug_customer_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('student'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Student_model->get_by_id($id);

        if ($row) {
            $this->Student_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('student'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('student'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('plug_customer_name', 'plug customer name', 'trim|required');
	$this->form_validation->set_rules('plug_customer_last_name', 'plug customer last name', 'trim|required');
	$this->form_validation->set_rules('plug_customer_ic', 'plug customer ic', 'trim');

	$this->form_validation->set_rules('plug_customer_id', 'plug_customer_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Student.php */
/* Location: ./application/controllers/Student.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-01-12 17:27:27 */
/* http://harviacode.com */