<?php

class Account extends CI_Controller{

    public function index(){
    $data['judul'] = 'Account - Local Travel Industry Partner';
    $this->load->view('templates/header', $data);
    $this->load->view('account/login');
    $this->load->view('templates/footer');
    }

    public function register_view(){
        $data['judul'] = 'Create Account - Local Travel Industry Partner';
        $this->load->view('templates/header', $data);
        $this->load->view('account/register');
        $this->load->view('templates/footer');
    } 

    public function resetPass_view(){
        $data['judul'] = 'Account - Local Travel Industry Partner';
        $this->load->view('templates/header', $data);
        $this->load->view('account/resetPassword');
        $this->load->view('templates/footer');
    }

    public function myaccount_view(){
        $data['judul'] = 'Account - Local Travel Industry Partner';
        $this->load->view('templates/header', $data);
        $this->load->view('account/myaccount');
        $this->load->view('templates/footer');
    } 

    public function register(){
        redirect('Account/index');
    }

    public function cek_login(){
        redirect('Account/myaccount_view');
    }
    
    public function resetPass(){
        redirect('Account/index');
    }
}