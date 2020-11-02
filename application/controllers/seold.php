<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class seold extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('add_model','AM');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function skeyword(){
		$key = $this->input->post('title');
		$data['AM'] = $this->AM->search($key);
		$this->load->view('View_Select',$data);		
	}


	public function Register()
	{
		$this->load->view('View_Regis');
	}
	public function add_Regis(){
		$data = array(
			'se_studentid' => $this->input->post("se_studentid"),
			'se_numna' => $this->input->post("se_numna"),
			'se_name' => $this->input->post("se_name"),
			'se_lastname'=> $this->input->post("se_lastname"),
			'se_birthday' => $this->input->post("se_birthday"),
			'se_idcard' => $this->input->post("se_idcard"),
			'se_yearend' => $this->input->post("se_yearend"),
			'se_skill'=> $this->input->post("se_skill"),
			'se_tel' => $this->input->post("se_tel"),
			'se_facebook' => $this->input->post("se_facebook"),
			'se_email' => $this->input->post("se_email"),
			'se_lakete'=> $this->input->post("se_lakete"),
			'se_mu' => $this->input->post("se_mu"),
			'se_district' => $this->input->post("se_district"),
			'se_aumpa' => $this->input->post("se_aumpa"),
			'se_province'=> $this->input->post("se_province"),
			'se_status_id'=> $this->input->post("se_status_id"),
		);
		$data1 = array(
			'work_name' => $this->input->post("work_name"),
			'work_lakete' => $this->input->post("work_lakete"),
			'work_mu' => $this->input->post("work_mu"),
			'work_district'=> $this->input->post("work_district"),
			'work_aumpua' => $this->input->post("work_aumpua"),
			'work_province' => $this->input->post("work_province"),
			'work_tel' => $this->input->post("work_tel"),
			'se_studentid'=> $this->input->post("se_studentid"),
			
		);
		$data2 = array(
			'se_studentid'=> $this->input->post("se_studentid"),
			'se_password' => $this->input->post("se_password"),
		);
		
		if($this->input->post("se_studentid")!= "" && $this->input->post("se_name")!== ""){
			$this->AM->regis_insert($data);
			$this->AM->work_insert($data1);
			$this->AM->pass_insert($data2);
			$this->load->view('index');
		}else {
			echo "ไม่สามารถสมัครสมาชิกได้";
		}
	}

	public function showall()
	{
		$result['AM'] = $this->AM->select_all();
		$this->load->view('View_Select',$result);
	}
	public function Login()
	{
		$this->load->view('View_login');
	}
	public function Check_Login()
	{

        if ($this->input->post('login')) {
            $StudentId = $this->input->post('se_studenid');
            $Password = $this->input->post('se_password');
            $check = $this->AM->Check_Login($StudentId, $Password);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
				$this->session->set_userdata($array[0]);
				$result['AM'] = $this->AM->select_all();
                $this->load->view('View_Select',$result);
            } else {



                // echo '<script>alert("Region already added");</script>'
				echo"<script language=\"JavaScript\">";
    			echo"alert('คุณกรอกรหัสผ่านไม่ถูกต้องหรือกรุณาสมัครสมาชิกก่อนค่ะ !')";
				echo	"</script>";
				$this->load->view('index');
            }
        }
	}

	public function Edit()
	{
		$Std_ID =  $this->session->userdata('se_studentid');
		$result['AM'] = $this->AM->Profile($Std_ID);
		$this->load->view('view_Edit',$result);
		
	}
	//ฟังก์ชั่นแก้ไข
	public function edit_Profile()
	{
		$data = array(
			'se_studentid' => $this->input->post("se_studentid"),
			'se_name'=> $this->input->post("se_name"),
			'se_lastname'=> $this->input->post("se_lastname"),
			'se_tel'=> $this->input->post("se_tel"),
			'se_skill'=> $this->input->post("se_skill"),
			'se_facebook'=> $this->input->post("se_facebook"),
			'se_email'=> $this->input->post("se_email"),
		);

		$data1 = array(
			'se_studentid' => $this->input->post("se_studentid"),
			'work_name'=> $this->input->post("work_name"),
			'work_lakete'=> $this->input->post("work_lakete"),
			'work_mu'=> $this->input->post("work_mu"),
			'work_district'=> $this->input->post("work_district"),
			'work_aumpua'=> $this->input->post("work_aumpua"),
			'work_province'=> $this->input->post("work_province"),
			'work_tel'=> $this->input->post("work_tel"),
		);

			$this->AM->Update_Register($data);
			$this->AM->Update_Work($data1);
			$Std_ID =  $this->session->userdata('se_studentid');
			$result1['AM'] = $this->AM->Profile($Std_ID);
			$this->load->view('View_profile', $result1);
		
	}
	public function Profile()
	{
		$Std_ID =  $this->session->userdata('se_studentid');
		$result['AM'] = $this->AM->Profile($Std_ID);
		$this->load->view('View_profile',$result);
		
	}
	public function Logout()
    {
        $this->session->sess_destroy();
        // $this->session->unset_userdata($data);
    
        $this->load->view('index');
	}
	
	public function viewProfile($id)
	{

		$Std_ID =  $id;
		$result['AM'] = $this->AM->Profile($Std_ID);
		$this->load->view('edit_profile',$result);
		
	}
}
