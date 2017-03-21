<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cust_model extends CI_Model {

		public function Cust_all($page,$rows){
			$page=($page-1)*$rows;
            $sql="SELECT id,customer_name,clname,clpass,clhits,customer_address FROM oa_customer  limit $page,$rows";
 						$result =$this->db->query($sql)->result_array();
						return $result;
    	}
public function Cust_count(){

	$sql="SELECT id FROM oa_customer  order by id desc limit 0,1";
	$result =$this->db->query($sql)->result_array();
	return $result;


}
}
