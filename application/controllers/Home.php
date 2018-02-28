<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('Admin_Model');
	}

	public function index(){
		$this->home();
    }
    
    public function home(){
        $this->load->view('home/home');
    }

    public function search(){
        $this->load->view('home/search');
    }

    public function prebooking(){
        $this->load->view('home/prebooking');
    }

    public function booking(){
        $this->load->view('home/booking');
    }

    public function payment(){
        $this->load->view('home/payment');
    }
}