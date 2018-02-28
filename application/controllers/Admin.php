<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_Model');
	}

	public function index(){
		$this->home();
	}

	public function home(){
		$data['total_revenue'] = $this->Admin_Model->total_revenue();
		$data['total_order'] = $this->Admin_Model->total_order();
		$data['total_flight'] = $this->Admin_Model->total_flight();
		$data['total_route'] = $this->Admin_Model->total_route();
		$data['order_request'] = $this->Admin_Model->order_request();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/home', $data);
		$this->load->view('templates/footer');
	}

	public function order_approve($id){
		$this->Admin_Model->order_approve($id);
		redirect('admin/home','refresh');
	}

	public function order_cancel($id){
		$this->Admin_Model->order_cancel($id);
		redirect('admin/home','refresh');
	}

	public function ticket(){
		$data['tickets'] = $this->Admin_Model->tickets();
		$data['routes'] = $this->Admin_Model->routes();
		$data['airplanes'] = $this->Admin_Model->airplanes();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/ticket', $data);
		$this->load->view('templates/footer');
	}

	//view
	public function ticket_view(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/tickets/ticket');
		$this->load->view('templates/footer');
	}

	public function ticket_seat(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/tickets/seat');
		$this->load->view('templates/footer');
	}

	public function ticket_status(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/tickets/status');
		$this->load->view('templates/footer');
	}

	public function route_view(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/routes/route');
		$this->load->view('templates/footer');
	}

	public function route_status(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/routes/status');
		$this->load->view('templates/footer');
	}

	public function airplane_view(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/airplanes/airplane');
		$this->load->view('templates/footer');
	}

	public function airplane_status(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/airplanes/status');
		$this->load->view('templates/footer');
	}

	//function
	public function ticket_create(){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->ticket_create();
			redirect('admin/ticket','refresh');
		}
	}

	public function ticket_update($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->ticket_update($id);
			redirect('admin/ticket','refresh');
		}
	}

	public function ticket_delete($id){
		$this->Admin_Model->ticket_delete($id);
		redirect('admin/ticket','refresh');
	}

	public function ticket_update_seat($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->ticket_update_seat($id);
			redirect('admin/ticket','refresh');
		}
	}

	public function ticket_update_status($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->ticket_update_status($id);
			redirect('admin/ticket','refresh');
		}
	}

	public function route_create(){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->route_create();
			redirect('admin/ticket','refresh');
		}
	}

	public function route_update($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->route_update($id);
			redirect('admin/ticket','refresh');
		}
	}

	public function route_delete($id){
		$this->Admin_Model->route_delete($id);
		redirect('admin/ticket','refresh');
	}

	public function route_update_status($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->route_update_status($id);
			redirect('admin/ticket','refresh');
		}
	}

	public function airplane_create(){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->airplane_create();
			redirect('admin/ticket','refresh');
		}
	}

	public function airplane_update($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->airplane_update($id);
			redirect('admin/ticket','refresh');
		}
	}

	public function airplane_delete($id){
		$this->Admin_Model->airplane_delete($id);
		redirect('admin/ticket','refresh');
	}

	public function airplane_update_status($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->airplane_update_status($id);
			redirect('admin/ticket','refresh');
		}
	}

	public function reserved(){
		$data['reserved'] = $this->Admin_Model->reserved();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/reserved', $data);
		$this->load->view('templates/footer');
	}

	public function reserved_view(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/reserved/reserved');
		$this->load->view('templates/footer');
	}

	public function reserved_delete($id){
		$this->Admin_Model->reserved_delete($id);
		redirect('admin/reserved','refresh');
	}

	public function setting(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/setting');
		$this->load->view('templates/footer');
	}

	public function setting_save(){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Admin_Model->admin_update("60001");
			redirect('admin/setting','refresh');
		}
	}

	public function login(){
		$this->load->view('admin/login');
	}

	public function logout(){
		$this->load->view('admin/login');
	}
}
