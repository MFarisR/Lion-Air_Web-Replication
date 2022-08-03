<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index() {
        $this->load->view('V_login');
    }
    
    public function exec() {
        $where = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        ];  
        $user = $this->M_admin->get_user($where);

        if ($user->num_rows() > 0) {
            $this->session->set_flashdata('notification', 'Login success!');
            $this->session->set_userdata('admin', $user->row_array());
            redirect('home');
        } else {
            $this->session->set_flashdata('notification', 'wrong username or password');
            redirect('login');
        }
    }
}
