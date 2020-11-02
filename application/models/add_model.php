<?php defined('BASEPATH') OR exit('No direct script access allowed');
class add_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        
		function select_all(){
			$this->db->select('se_studentid, se_numna, se_name,se_lastname,se_birthday,se_idcard,se_tel,se_yearend,se_skill,se_facebook,se_email,se_lakete,se_mu,se_district,se_aumpa,se_province,se_status_id');
			$this->db->where('se_status_id', 2);
			$result = $this->db->get('se_register');
			return $result;
		}

        function regis_insert($data){
			$this->db->insert('se_register',$data);
		} 
		function work_insert($data1){
			$this->db->insert('se_workaddress',$data1);
		}
		function pass_insert($data2){
			$this->db->insert('login',$data2);
        }
	     
		function menu_update($data,$menu_id){
			$this->db->where('menu_id', $menu_id);
			$this->db->update('menu', $data);
		}
		
		function search($key){
			$this->db->like('se_studentid',$key);
			$result = $this->db->get('se_register');
			return $result;
		}

		//คำสั่ง Check Login
        function Check_Login($StudentId,$Password){
            $this->db->where('se_studentid', $StudentId);
            $this->db->where('se_password', $Password);
            $result = $this->db->get('login');
            $message = '';
    
            if ($result->num_rows() > 0) {
                $message = true;
    
                // $this->load->view('list');
    
            } else {
                $message = false;
            }
            $data = array(
                "message" => $message, "data" => $result->result()
    
            );
            return $data;
}
		function Update_Register($data)
		{
			$Std_ID =  $this->session->userdata('se_studentid');
			$this->db->where('se_studentid', $Std_ID);
			$this->db->update('se_register', $data);
		}
		function Update_Work($data)
				{
					$Std_ID =  $this->session->userdata('se_studentid');
					$this->db->where('se_studentid', $Std_ID);
					$this->db->update('se_workaddress', $data);
				}
				function Profile($Std_ID){
					$this->db->select('*');
					$this->db->from('se_register');
					$this->db->join('se_workaddress', 'se_workaddress.se_studentid = se_register.se_studentid', 'left');
					$this->db->where('se_register.se_studentid', $Std_ID);
					
					$query = $this->db->get();
					return $query->result();
					}
		}