<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Set_User extends CI_Controller {

	 
    public function User_setting_data($id)
	{
        $user = $this->session->userdata('user');
        if ($user['id_user'] != ''){
        $this->load->model('Models_User','Controller_Set_User');
		$data = $this->Controller_Set_User->get_by_id($id);
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
	}
    
    public function User_update()
	{
        $user = $this->session->userdata('user');
        $this->load->model('Models_User','Controller_Set_User');
		$this->_validate();
		$data = array(
                'username' => $this->input->post('username'),
				'password' => $this->encrypt->encode($this->input->post('password')),
			);

		$this->Controller_Set_User->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}
    
     private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

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

}
