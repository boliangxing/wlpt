<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index(){
     session_start();
  $this->load->helper('url');
if(IS_POST){

   $user=$this->input->post('email');

   $pwd=$this->input->post('password');
    $this->load->model('login_model');
   $r=$this->login_model->login($user,$pwd);
     if($r){

     $_SESSION['user'] = $r;
echo "<script>window.location.href='".site_url('main/index')."'</script>";
     }else{
echo "<script>window.location.href='".site_url('login')."'</script>";
     }

}
    $this->load->view('login');
  }

public function out(){

  session_start();
        unset($_SESSION['user']);
  $this->load->view('login');

}

  }
