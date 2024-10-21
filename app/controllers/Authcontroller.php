<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    
    public function index()
    {
        $this->load->view('auth/login');
        //$this->load->view('auth/testlogin');
        /*if($this->session->userdata('isLogged')){
            redirect('/admin');
        }else{
            $this->load->view('auth/loginUser');
        }*/
        
    }

    public function login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        //print_r($username);
        $this->load->library('LoginLib');
        $util = new LoginLib();
        $checkUser = $util->getLogin($username, $password);
        if($checkUser){
            redirect(site_url($this->session->userdata('user_guard')));
        }else{
            // Display error message
            $this->session->set_flashdata('flashError', 'Error de usuario y/o contraseña o usuario desactivado.');
            redirect('/');
        }
    }
    public function loginUser()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        //print_r($username);
        $this->load->library('loginLib');
        $util = new loginLib();
        $checkUser = $util->getLoginUser($username, $password);
        if($checkUser){
            redirect('/users');
        }else{
            // Display error message
            $this->session->set_flashdata('flashError', 'Error de usuario y/o contraseña o usuario desactivado.');
            redirect('/login');
        }
    }

    public function index_Admin()
    {
        /*if($this->session->userdata('isLogged')){
            redirect('/admin');
        }else{
            $this->load->view('auth/loginAdmin');
        }*/
        $this->load->view('auth/loginAdmin');
    }

    public function loginAdmin()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        //print_r($username);
        $this->load->library('loginLib');
        $util = new loginLib();
        $checkAdmin = $util->getLoginAdmin($username, $password);
        if($checkAdmin){
            redirect('/admin');
        }else{
            $this->session->set_flashdata('flashError', 'Error de usuario y/o contraseña.');
            redirect('/wp-admin');
        }
    }

}
