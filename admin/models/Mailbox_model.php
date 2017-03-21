<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailbox_model extends CI_Model {

		public function sel($user){
            $sql="SELECT * FROM mailbox WHERE shoujian='$user' ";
 						$result =$this->db->query($sql)->result_array();
						return $result;
    	}

			public function fasong($data){

				$this->db->insert('mailbox',$data);
		    return $this->db->insert_id();

			}
}
