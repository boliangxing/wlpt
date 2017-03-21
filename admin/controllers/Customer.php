<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

  public function index(){
     session_start();
  $this->load->helper('url');

   $this->load->view('Customer/index');


}

public function Cust_all(){


      $this->load->helper('url');
      $this->load->model('Cust_model');

    //  $pwd = $this->input->post('pwd');
    $page=$this->input->get('page');
$rows=$this->input->get('rows');

        $result=$this->Cust_model->Cust_all($page,$rows);
        if ($result) {
          # code...

   $count=$this->Cust_model->Cust_count();
          $total = ceil($count[0]['id']/$rows);//*Input::get("rows") / 10;
          $jsondata['page']=$page;
          $jsondata['total']=$total;
          $jsondata['records']=$count[0]['id'];
          $jsondata['rows']=$result;

          //$json = $result;
        }
     echo json_encode($jsondata);



}

  }
