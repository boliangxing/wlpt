<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  public function index(){
  $this->load->helper('url');

   session_start();
   if(isset($_SESSION['user'])){
     $this->load->model('Mailbox_model');
     $arr=$_SESSION['user'];
    $user=$arr[0]['name'] ;

//     $this->load->driver('cache', array('adapter' => 'redis'));
//
// if ( ! $foo = $this->cache->get('foo'))
// {
//
//      $foo =$arr[0]['name']  ;
//
//      // Save into the cache for 5 minutes
//      $this->cache->save('foo', $foo, 300);
// }


    $data['list']=$this->Mailbox_model->sel($user);
    $_SESSION['mail']=  $data['list'];

 $this->load->view('main');

   }
else{

   $this->load->view('Login');


}


  }


  }
