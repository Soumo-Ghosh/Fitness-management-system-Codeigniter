<?php
class MyController1 extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}
    function display()
    {
       echo "welcome to code igniter";
	}
	function signup()
	{
		$this->load->view('Signup');
	}
	function signupdo()
    {
	$data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"password"=>$this->input->post("password")); 
    $this->load->model('MyModel');
	if($this->MyModel->add($data))
		echo "Data Added Successfully";
	else
		echo "not added";
    }
}
?>