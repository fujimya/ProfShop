<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_User extends CI_Controller {

	public function index()
	{
        $this -> load -> model('Models_User');
        $data['list'] = $this->Models_User->list_user()->result();
//        print_r($data);
//        die;
        $this->load->view('header.php');
		$this->load->view('View_User',$data);
	}
    public function User_Simpan()
	{
		$id = chr(rand(65,90)).chr(rand(65,90)).rand(100,10000).chr(rand(65,90));
        $this->load->model('Models_User','Controller_User');
		$this->_validate();
		$data = array(
				'id' => $id,
				'nama_user' => $this->input->post('nama_user'),
                'jabatan' => $this->input->post('jabatan'),
                'username' => $this->input->post('username'),
				'password' =>$this->encrypt->encode( $this->input->post('password')),
				
			);
        $insert = $this->Controller_User->save($data);
        //echo print_r($data);
		echo json_encode(array("status" => TRUE));
    }
    
    public function User_hapus($name)
	{
        $this->load->model('Models_User','Controller_User');
		//delete file
		$this->Controller_User->delete_by_name($name);
		echo json_encode(array("status" => TRUE));
        
	}
    public function User_ubah_data($id)
	{
        $this->load->model('Models_User','Controller_User');
		$data = $this->Controller_User->get_by_name($id);
        echo json_encode($data);
        
	}

	public function edit_user($id){
		$this->load->model('Models_User','Controller_User');
		$data = $this->Controller_User->get_by_name($id);
        // echo json_encode($data);
        // print_r($data);

        foreach ($data as $key) {
			$data = array(
				'id' => $key->id,
				'nama_user' => $key->nama_user,
                'jabatan' =>$key->jabatan,
                'username' => $key->username,
				'password' =>$this->encrypt->decode($key->password),
				
			);
		}
		//print_r($data);
		echo json_encode($data);  
	}
    
     public function User_update_data()
	{
        $this->load->model('Models_User','Controller_User');
		$this->_validate();
        //$password_sekarang = $this->encrypt->decode($this->input->post('password'));
        
		$data = array(
				'nama_user' => $this->input->post('nama_user'),
                'jabatan' => $this->input->post('jabatan'),
                'username' => $this->input->post('username'),
				'password' =>$this->encrypt->encode( $this->input->post('password')),
				
			);
		$this->Controller_User->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}
     private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nama_user') == '')
		{
			$data['inputerror'][] = 'nama_user';
			$data['error_string'][] = 'Nama User wajib diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('jabatan') == '')
		{
			$data['inputerror'][] = 'jabatan';
			$data['error_string'][] = 'Jabatan wajib diisi';
			$data['status'] = FALSE;
		}
       
        if($this->input->post('username') == '')
		{
			$data['inputerror'][] = 'username';
			$data['error_string'][] = 'User Name wajib diisi';
			$data['status'] = FALSE;
		}
        
        if($this->input->post('password') == '')
		{
			$data['inputerror'][] = 'password';
			$data['error_string'][] = 'Password wajib diisi';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
        
        //die;
	
}
