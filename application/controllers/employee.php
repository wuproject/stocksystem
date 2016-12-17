<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function index()
	{
		//$sess_fname = isset($_SESSION['fname'])?$_SESSION['fname']:"";
		//echo $sess_fname;
		//$this->load->view('login_message');
		$this->load->view('employee_info',$data);
			$this->load->view('product_info');

	}


	public function chkemp(){


		/*$this->input->post('St_id');
		$this->input->post('St_firstname');
		$this->input->post('St_lastname');
		$this->input->post('St_address');
		$this->input->post('St_Email');
		$this->input->post('St_mobile');
		$this->input->post('St_position');
		$this->input->post('St_username');
		$this->input->post('St_password');*/

		/*$this->staff->insert($St_id);
		$this->staff->insert($St_firstname);
		$this->staff->insert($St_lastname);
		$this->staff->insert($St_address);
		$this->staff->insert($St_Email);
		$this->staff->insert($St_mobile);
		$this->staff->insert($St_position);
		$this->staff->insert($St_username);
		$this->staff->insert($St_password);*/




		$this->load->model("emp_model");
		$em = $this->emp_model->insemp();
		$this->staff->_save($St_id['ID'],$St_firstname['fnamename'],$St_lastname['lname'],$St_address['address'],$St_Email['email'],$St_mobile['phone'],$St_position['position'],$St_username['Username'],$St_password['Password']);

		//die();

		if($em){
				echo "Welcome",'username';

				redirect('/employee/', 'refresh');
			}else{
				redirect('/employee/');
			}

}

		/*public function showemploy()
		{

			$data['staff']=$this->stock->_getDetail($St_id,$St_firstname,$St_lastname,$St_address,$St_Email,$St_mobile,$St_position,$St_username,$St_password);
			$this->load->view('showemployee_info',$data);
			/*$St_id	=	$_GET["ID"];
			$St_firstname	=	$_GET["fnamename"];
			$St_lastname = $_GET["lname"];
			$St_address	= $_POST["address"];
			$St_Email = $_GET["email"];
			$St_mobile = $_GET["phone"];
			$St_position = $_GET["position"];
			$St_username = $_GET["username"];
			$St_password = $_GET["password"];

			/*$this->load->database();
			$this->load->model("emp_model");
			$query = $this->db->get("staff");
			if($query->num_rows() > 0){
				$output['dbrow'] = $query->result();
			}else {
				$output['dbrow'] = null;
			}
			$query->free_result();
			$this->load->view("showemployee_info", $output);

			$this->load->model("emp_model");
			$this->emp_model->getall();
		}*/


public function prod()
{
	$this->load->model("emp_model");
	$this->emp_model->inspro();
	$this->product->_save($Cpn_name['comp_name'],$P_id['product_id'],$P_sort['category'],$P_name['product_name'],$P_cost['cost']
	,$P_price['pice'],$P_quantity['num'],$P_inventory['inventories']);
}

			}
	?>
