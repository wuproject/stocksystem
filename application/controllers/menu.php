<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

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
		$this->load->view('menu_view');
	}
	public function emp()
    {
	 $this->load->view('menu_view');
	 $this->load->view('showemployee_info');
    }
	public function empm()
	{
		$this->load->view('menu_view');
		$this->load->view('employee_info');
	}

    public function com()
    {
    	$this->load->view('menu_view');
	    $this->load->view('showcompany_info');
    } 
    public function comp()
    {
	    $this->load->view('menu_view');
	    $this->load->view('company_info');
    }
	public function pro()
	{
		$this->load->view('menu_view');
		$this->load->view('showproduct_info');		
	}
	public function prod()
	{
		$this->load->view('menu_view');
		$this->load->view('product_info');		
	}
	public function orde()
	{
		$this->load->view('menu_view');
		$this->load->view('showorders');
		
	}
	public function order()
	{
		$this->load->view('menu_view');
		$this->load->view('orders');
		
	}
	public function pic()
	{
		$this->load->view('menu_view');
		$this->load->view('showpicking_s');
		
	}
	public function pick()
	{
		$this->load->view('menu_view');
		$this->load->view('picking_s');
		
	}public function ret()
	{
		$this->load->view('menu_view');
		$this->load->view('showreturn_product');
		
	}
	public function retu()
	{
		$this->load->view('menu_view');
		$this->load->view('return_product');
		
	}
	public function dam()
	{
		$this->load->view('menu_view');
		$this->load->view('showdamaged_goods');
		
	}
	public function dama()
	{
		$this->load->view('menu_view');
		$this->load->view('damaged_goods');
		
	}
	public function repe()
	{
		$this->load->view('menu_view');
		$this->load->view('rep_employee_info');
		
	}
	public function repc()
	{
		$this->load->view('menu_view');
		$this->load->view('rep_company_info');
		
	}
	public function repp()
	{
		$this->load->view('menu_view');
		$this->load->view('rep_product_info');
		
	}
	public function repo()
	{
		$this->load->view('menu_view');
		$this->load->view('rep_orders');
		
	}
	public function repk()
	{
		$this->load->view('menu_view');
		$this->load->view('rep_picking_s');
		
	}
	public function repr()
	{
		$this->load->view('menu_view');
		$this->load->view('rep_return_product');
		
	}
	public function repd()
	{
		$this->load->view('menu_view');
		$this->load->view('rep_damaged_goods');
		
	}
	
}
