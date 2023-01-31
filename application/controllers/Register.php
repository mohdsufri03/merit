<?php
class Register extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper("form");
        $this->load->library("form_validation");



    }



    public function index()
    {

        $this->form_validation->set_rules("uname", "Username", "required/min_length[3]");
        $this->form_validation->set_rules("email", "Email", "required/valid_email");
        $this->form_validation->set_rules("pwd", "Password", "required/min_length[8]/max_length[20]");
        $this->form_validation->set_rules("cpwd", "Confirm Password", "required/min_length[6]/max_length[20]/matches[pwd]");
        $this->form_validation->set_rules("mobile", "Mobile", "required/exact_length[10]/numeric");
        $this->form_validation->set_rules("gender", "Gender", "required");

        if ($this->form_validation->run() == true) {
            $uname = $this->input->post("uname", TRUE);
            $email = $this->input->post("email", TRUE);
            $pwd = $this->input->post("pwd", TRUE);
            $mobile = $this->input->post("mobile", TRUE);
            $gender = $this->input->post("gender", TRUE);

        } else {
            $this->load->view("register_view");
        }
    }
    public function another()
    {

    }

}