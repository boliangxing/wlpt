<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

		public function login($user,$pwd){
            $sql="SELECT * FROM u_login WHERE name='$user' AND pass='$pwd'";
 						$result =$this->db->query($sql)->result_array();
						return $result;
    	}
			public function logins($user){
							$sql="SELECT * FROM u_login WHERE name='$user' ";
							$result =$this->db->query($sql)->result_array();
							return $result;
				}
}
