<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MailBox extends CI_Controller {

  public function index(){
     session_start();
  $this->load->helper('url');
     $this->load->model('Mailbox_model');
 $user=$this->input->post('user');
 $data['list']=$this->Mailbox_model->sel($user);
 $_SESSION['mail']=  $data['list'];
 $this->load->model('login_model');
$r=$this->login_model->logins($user);
$_SESSION['user'] = $r;
     $this->load->view('Mail/index');


  }
  public function compose_add(){
     session_start();
    $this->load->helper('url');

    if(IS_POST){

  $data=$this->input->post();
   $this->load->model('Mailbox_model');
   $this->Mailbox_model->fasong($data);

    }
    $user=$this->input->post('fasong');
   $this->load->model('login_model');
  $r=$this->login_model->logins($user);
  $_SESSION['user'] = $r;

  $this->load->model('Mailbox_model');
 $data['list']=$this->Mailbox_model->sel($user);
 $_SESSION['mail']=  $data['list'];
$this->load->view('Mail/compose');
  }
public function compose(){
   session_start();
  $this->load->helper('url');

//   if(IS_POST){
//
// $data=$this->input->post();
//  $this->load->model('Mailbox_model');
//  $this->Mailbox_model->fasong($data);
//
//   }
   $user=$this->input->post('user');
  $this->load->model('login_model');
 $r=$this->login_model->logins($user);
 $_SESSION['user'] = $r;

 $this->load->model('Mailbox_model');
$data['list']=$this->Mailbox_model->sel($user);
$_SESSION['mail']=  $data['list'];


$this->load->view('Mail/compose');


}

  }
