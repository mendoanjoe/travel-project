<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {
    public $cmTicket = 'tickets';
    public $cmUser = 'users';
    public $cmAdmin = 'admin';
    public $cmPlane = 'airplanes';
    public $cmBank = 'banks';
    public $cmReserved = 'reserved';
    public $cmRoute = 'routes';

    // Other Function
    public function total_revenue(){
        $this->db->reset_query();
        $this->db->select_sum('price');
        $query = $this->db->get_where('reserved', array('status' => 'Complete'));        
        foreach ($query->result() as $row)
        {
            $query =  $row->price;
        }
        return number_format($query);
    }

    public function admin_login(){
        $this->db->reset_query();
        $email = $this->input->post('email');
        $password = base64_encode($this->input->post('password'));
        $query = $this->db->get_where('admin', array('email' => $email,'password' => $password));
        $valid = FALSE;
        if($query->num_rows() > 0){
            $this->session->set_userdata('user_admin', 'Ter Login');
            $valid = TRUE;
        }else{
            $valid = FALSE;
        }

        return $valid;
    }
    
    public function total_order(){
        $this->db->reset_query();
        return number_format($this->db->count_all_results('reserved', FALSE));
    }

    public function total_flight(){
        $this->db->reset_query();
        return number_format($this->db->count_all_results('airplanes', FALSE));
    }

    public function total_route(){
        $this->db->reset_query();
        return number_format($this->db->count_all_results('routes', FALSE));
    }

    public function order_request(){
        $this->db->reset_query();
        return $this->db->get_where('reserved', array('status' => 'Incomplete'));
    }

    public function order_approve($id){
        $this->db->reset_query();
        return $this->db->update('reserved',array('status' => 'Complete'), array('transaction_code' => $id));
    }

    public function order_cancel($id){
        $this->db->reset_query();
        return $this->db->update('reserved',array('status' => 'Cancel'), array('transaction_code' => $id));
    }

    // Ticket Function
    public function tickets(){
        $this->db->reset_query();
        return $this->db->get('tickets');
    }

    public function ticket_by_id($id){
        $this->db->reset_query();
        return $this->db->get_where('tickets', array('uuid' => $id));
    }

    public function ticket_delete($id){
        $this->db->reset_query();
        $data=array(
            'status' => "Deleted"
		);
        return $this->db->update('tickets',$data,array('uuid' => $id));
    }

    public function ticket_update($id){
        $this->db->reset_query();
        $data=array(
			'airplane_code' => $this->input->post('airplane_code'),
			'category' => $this->input->post('flight_category'),
			'route_code' => $this->input->post('route_code'),
            'departure_date' => $this->input->post('departure_date'),
            'departure_time' => $this->input->post('departure_time'),
            'arrive_date' => $this->input->post('arrive_date'),
            'arrive_time' => $this->input->post('arrive_time'),
            'cabin_total' => $this->input->post('cabin_total'),
            'available_seat' => $this->input->post('available_seat'),
            'price' => $this->input->post('flightprice')
        );
        return $this->db->update('tickets',$data,array('uuid' => $id));
    }

    public function ticket_update_seat($id){
        $this->db->reset_query();
        $data=array(
            'available_seat' => $this->input->post('flightseat')
		);
        return $this->db->update('tickets',$data,array('uuid' => $id));
    }

    public function ticket_update_status($id){
        $this->db->reset_query();
        $data=array(
            'status' => $this->input->post('flightstatus')
		);
        return $this->db->update('tickets',$data,array('uuid' => $id));
    }

    public function ticket_create(){
        $this->db->reset_query();
        $data=array(
			'airplane_code' => $this->input->post('airplane_code'),
			'category' => $this->input->post('flight_category'),
			'route_code' => $this->input->post('route_code'),
            'departure_date' => $this->input->post('departure_date'),
            'departure_time' => $this->input->post('departure_time'),
            'arrive_date' => $this->input->post('arrive_date'),
            'arrive_time' => $this->input->post('arrive_time'),
            'cabin_total' => $this->input->post('cabin_total'),
            'available_seat' => $this->input->post('available_seat'),
            'price' => $this->input->post('flightprice'),
            'registered_seat' => $this->input->post('registered_seat'),
            'status' => "Available"
		);
        return $this->db->insert('tickets',$data);
    }

    // User Function
    public function users(){
        $this->db->reset_query();
        return $this->db->get('users');
    }

    public function user_by_id($id){
        $this->db->reset_query();
        return $this->db->get_where('users', array('uuid' => $id));
    }

    public function user_delete($id){
        $this->db->reset_query();
        return $this->db->delete('users', array('uuid' => $id));
    }

    public function user_update($id){
        $this->db->reset_query();
        $data=array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
            'title' => $this->input->post('title'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'birthdate' => $this->input->post('birthdate'),
            'citizenship' => $this->input->post('citizenship'),
            'status' => $this->input->post('status')
		);
        return $this->db->update('users',$data,array('uuid' => $id));
    }

    public function user_create(){
        $this->db->reset_query();
        $data=array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
            'title' => $this->input->post('title'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'birthdate' => $this->input->post('birthdate'),
            'citizenship' => $this->input->post('citizenship'),
            'status' => $this->input->post('status')
		);
        return $this->db->insert('users',$data);
    }

    // Admin Function
    public function admin(){
        $this->db->reset_query();
        return $this->db->get('admin');
    }

    public function admin_by_id($id){
        $this->db->reset_query();
        return $this->db->get_where('admin', array('uuid' => $id));
    }

    public function admin_delete($id){
        $this->db->reset_query();
        return $this->db->delete('admin', array('uuid' => $id));
    }

    public function admin_update($id){
        $this->db->reset_query();
        $data=array(
			'email' => $this->input->post('setting_email'),
			'password' => base64_encode($this->input->post('setting_password'))
		);
        return $this->db->update('admin',$data,array('uuid' => $id));
    }

    public function admin_create(){
        $this->db->reset_query();
        $data=array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
            'status' => $this->input->post('status')
		);
        return $this->db->insert('admin',$data);
    }

    // Airplane Function
    public function airplanes(){
        $this->db->reset_query();
        return $this->db->get('airplanes');
    }

    public function airplane_by_id($id){
        $this->db->reset_query();
        return $this->db->get_where('airplanes', array('uuid' => $id));
    }

    public function airplane_delete($id){
        $this->db->reset_query();
        $data=array(
            'status' => "Deleted"
		);
        return $this->db->update('airplanes',$data,array('uuid' => $id));
    }

    public function airplane_update($id){
        $this->db->reset_query();
        $data=array(
            'name' => $this->input->post('airplanename'),
            'flight_code' => $this->input->post('flight_code')
		);
        return $this->db->update('airplanes',$data,array('uuid' => $id));
    }

    public function airplane_create(){
        $this->db->reset_query();
        $data=array(
            'name' => $this->input->post('airplanename'),
            'flight_code' => $this->input->post('flight_code'),
            'status' => "Available"
		);
        return $this->db->insert('airplanes',$data);
    }

    public function airplane_update_status($id){
        $this->db->reset_query();
        $data=array(
            'status' => $this->input->post('airplanestatus')
		);
        return $this->db->update('airplanes',$data,array('uuid' => $id));
    }
    
    // Bank Function
    public function bank(){
        $this->db->reset_query();
        return $this->db->get('');
    }

    public function bank_by_id($id){
        $this->db->reset_query();
        return $this->db->get_where('banks', array('uuid' => $id));
    }

    public function bank_delete($id){

    }

    public function bank_update($id){
        
    }

    public function bank_create(){
        
    }

    // Reserved Function
    public function reserved(){
        $this->db->reset_query();
        return $this->db->get('reserved');
    }

    public function reserved_by_id($id){
        $this->db->reset_query();
        return $this->db->get_where('reserved', array('transaction_code' => $id));
    }

    public function reserved_delete($id){
        $this->db->reset_query();
        $data=array(
            'status' => "Deleted"
		);
        return $this->db->update('reserved',$data,array('transaction_code' => $id));
    }

    public function reserved_update($id){
        
    }

    public function reserved_create(){
        
    }

    // Routes Function
    public function routes(){
        $this->db->reset_query();
        return $this->db->get('routes');
    }

    public function route_by_id($id){
        $this->db->reset_query();
        return $this->db->get_where('routes', array('uuid' => $id));
    }

    public function route_delete($id){
        $this->db->reset_query();
        $data=array(
            'status' => "Deleted"
		);
        return $this->db->update('routes',$data,array('uuid' => $id));
    }

    public function route_update($id){
        $this->db->reset_query();
        $data=array(
			'arrival_city' => $this->input->post('arrival_city'),
            'arrival_airport' => $this->input->post('arrival_airport'),
            'departure_city' => $this->input->post('departure_city'),
            'departure_airport' => $this->input->post('departure_airport')
		);
        return $this->db->update('routes',$data,array('uuid' => $id));
    }

    public function route_create(){
        $this->db->reset_query();
        $data=array(
			'arrival_city' => $this->input->post('arrival_city'),
            'arrival_airport' => $this->input->post('arrival_airport'),
            'departure_city' => $this->input->post('departure_city'),
            'departure_airport' => $this->input->post('departure_airport'),
            'status' => "Available"
		);
        return $this->db->insert('routes',$data);
    }

    public function route_update_status($id){
        $this->db->reset_query();
        $data=array(
            'status' => $this->input->post('routestatus')
		);
        return $this->db->update('routes',$data,array('uuid' => $id));
    }
}