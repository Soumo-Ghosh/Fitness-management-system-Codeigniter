<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
	}
	function login()
	{
		$this->load->view('adminlog');
	}
		function logindo()
	{
		$data=array("username"=>$this->input->post("username"),"password"=>$this->input->post("password"));
		$query=$this->db->get_where("admin",$data);
		$result=$query->result_array();
		if($result)
		{
			$this->session->set_userdata('uid',$this->input->post('username'));
			redirect('/MyController/welcome/');
		}
		else
			$this->load->view('adminlog');	
	}
	function welcome()
	{
		if($this->session->userdata('uid'))
			$this->load->view('welcome');
		else
			$this->load->view('adminlog');
	}
		function membersignup()
	{
		if($this->session->userdata('uid'))
		  $this->load->view('members');
	    else
			$this->load->view('adminlog');
	}
	function addmember()
	{
		if($this->session->userdata('uid'))
		$this->load->view('addmember');
	    else
			$this->load->view('adminlog');
	}
	function memberdosignup()
	{
		$data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone")
		,"password"=>$this->input->post("password"),);
		$this->load->model('Mymodel');
		if($this->Mymodel->memberadd($data))
			redirect('/MyController/fetch/');
		else
			echo "error in in adding database";
	}
	function fetch()
	{
		if($this->session->userdata('uid'))
		{
		$query=$this->db->get("member");
		$data['records']=$query->result();
		$this->load->view('Membersfetch',$data);
		}
		else
			$this->load->view('adminlog');
		
	}
	function memberdel()
	{
		if($this->session->userdata('uid'))
		{
		$this->load->model('Mymodel');                           
		$id=$this->uri->segment('3');
		$this->Mymodel->delmember($id);
		$this->fetch();
		}
		else
			$this->load->view('adminlog');
		
	}
	function memberupdate()
	{
		if($this->session->userdata('uid'))
		{
		$id=$this->uri->segment('3');
		$query=$this->db->get_where("member",array("id"=>$id));
		$data['records']=$query->result();
		$this->load->view('memberupdate',$data);
		}
		else
			$this->load->view('adminlog');
	}
	function updatedo()
	{
		if($this->session->userdata('uid'))
		{
		$data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"password"=>$this->input->post("password"),"payment"=>$this->input->post("payment"));
		$id=$this->input->post("id");
		$this->load->model('Mymodel');
		$this->Mymodel->updo($data,$id);
		redirect("/MyController/fetch/");
		}
		else
			$this->load->view('adminlog');
		
	}
	function mainpage()
	{
		$this->load->view('mainpage');
	}
	function memberlog()
	{
		$this->load->view('memberlog');
	}
	
	function memberlogindo()
	{
		$data=array("email"=>$this->input->post("email"),"password"=>$this->input->post("password"));
		$query=$this->db->get_where("member",$data);
		$result=$query->result_array();
		if($result)
		{
			$this->session->set_userdata('uid',$this->input->post('email'));
			redirect('/MyController/memberdash/');
		}
		else
			$this->load->view('memberlog');	
	}
	function memberdash()
	{
		if($this->session->userdata('uid'))
		$this->load->view('memberdash');
		else
			$this->load->view('memberlog');
	}
	function memberpayment()
	{
		if($this->session->userdata('uid'))
		{
		 $query=$this->db->get("member");
		 $data['records']=$query->result();
		 $this->load->view('memberpayment',$data);
		}
		else
			$this->load->view('memberlog');
	}
	function memberpaymentupdate()
	{
		if($this->session->userdata('uid'))
		{
		$id=$this->uri->segment('3');
		$query=$this->db->get_where("member",array("id"=>$id));
		$data['records']=$query->result();
		$this->load->view('memberdopayment',$data);
		}
		else
			$this->load->view('memberlog');
	}
	function memberdopayment()
	{
		$data=array("payment"=>$this->input->post("payment"));
		$id=$this->input->post("id");
		$this->load->model('Mymodel');
		$this->Mymodel->memberpaymentdo($data,$id);
		redirect("/MyController/memberpayment/");
	}
	
	function memberfetch1()
	{
		if($this->session->userdata('uid'))
		{
		$query=$this->db->get("member");
		$data['records']=$query->result();
		$this->load->view('Memberfetch1',$data);
		}
		else
			$this->load->view('memberlog');
	}
	function addtrainer()
	{
		if($this->session->userdata('uid'))
		$this->load->view('addtrainer');
	    else
			$this->load->view('adminlog');
	    
	}
	function doaddtrainer()
	{
		$data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone")
		,"password"=>$this->input->post("password"),"shift"=>$this->input->post("shift"));
		$this->load->model('Mymodel');
		if($this->Mymodel->addtrain($data))
			redirect('/MyController/trainerfetch/');
		else
			echo "error in in adding database";
	}
	function trainerfetch()
	{
		if($this->session->userdata('uid'))
		{
		$query=$this->db->get("trainer");
		$data['records']=$query->result();
		$this->load->view('trainerfetch',$data);
		}
		else
			$this->load->view('adminlog');
		
	}
	function trainerlog()
	{
		$this->load->view('trainerlog');
	}
	function trainerlogindo()
	{
		$data=array("name"=>$this->input->post("name"),"password"=>$this->input->post("password"));
		$query=$this->db->get_where("trainer",$data);
		$result=$query->result_array();
		if($result)
		{
			$this->session->set_userdata('uid',$this->input->post("password"));
			redirect('/MyController/trainerdash/');
		}
		else
			$this->load->view('trainerlog');
	}
	function trainerfetch1()
	{
		if($this->session->userdata('uid'))
		{
		 $query=$this->db->get("trainer");
		 $data['records']=$query->result();
		 $this->load->view('trainerfetch1',$data);
		}
		else
			$this->load->view('trainerlog');
		
	}
	function trainerdel()
	{
		if($this->session->userdata('uid'))
		{
		$this->load->model('Mymodel');                           
		$id=$this->uri->segment('3');
		$this->Mymodel->deltrainer($id);
		$this->trainerfetch();
		}
		else
			$this->load->view('adminlog');
		
	}
	function trainerupdate()
	{
		if($this->session->userdata('uid'))
		{
		$id=$this->uri->segment('3');
		$query=$this->db->get_where("trainer",array("id"=>$id));
		$data['records']=$query->result();
		$this->load->view('trainerupdate',$data);
		}
		else
			$this->load->view('adminlog');
		
	}
	function trainerdoupdate()
	{
		$data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"password"=>$this->input->post("password"),"shift"=>$this->input->post("shift"));
		$id=$this->input->post("id");
		$this->load->model('Mymodel');
		$this->Mymodel->trainerupdatedo($data,$id);
		redirect("/MyController/trainerfetch/");
	}
	function trainerdash()
	{ 
	    if($this->session->userdata('uid'))
		{
		 $this->load->view('trainerdashboard');
		}
		else
			$this->load->view('trainerlog');
			
	}
	function trainermemberfetch()
	{
		if($this->session->userdata('uid'))
		{
		$query=$this->db->get("member");
		$data['records']=$query->result();
		$this->load->view('trainermemberfetch',$data);
		}
		else
			$this->load->view('trainerlog');
		
	}
	function updateattendence()
	{
		if($this->session->userdata('uid'))
		{
		$id=$this->uri->segment('3');
		$query=$this->db->get_where("member",array("id"=>$id));
		$data['records']=$query->result();
		$this->load->view('updateattendence',$data);
		}
		else
			$this->load->view('trainerlog');
	}
	function updateattendencedo()
	{
		if($this->session->userdata('uid'))
		{
		$data=array("Attendence"=>$this->input->post("Attendence"));
		$id=$this->input->post("id");
		$this->load->model('Mymodel');
		$this->Mymodel->updatedoattendence($data,$id);
		redirect("/MyController/trainermemberfetch/");
		}
		else
			$this->load->view('trainerlog');
	}
	function logoutadmin()
	{
		$this->session->sess_destroy();
		redirect("/MyController/welcome/");
	}
	function logouttrainer()
	{
		$this->session->sess_destroy();
		redirect("/MyController/trainerlog/");
	}
	function logoutmember()
	{
		$this->session->sess_destroy();
		redirect("/MyController/memberlog/");
	}
	
	

	
	
		
		
}
?>
	
	
	
	
		