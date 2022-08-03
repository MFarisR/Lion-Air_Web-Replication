<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()	{
		$this->load->view('Admin');
    }
    
    public function exec() {
        $where = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        ];
        $user = $this->M_users->get_user($where);

        if ($user->num_rows() > 0) {
            $this->session->set_flashdata('notification', 'Login success!');
            $this->session->set_userdata('user', $user->row_array());
            redirect('home');
        } else {
            $this->session->set_flashdata('notification', 'wrong username or password');
            redirect('login');
        }
    }
}
