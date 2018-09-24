<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Masuk extends CI_Controller {

	public function index()
	{
        $sess_array = array (
                'id_user' =>'user' ,
                'nama_user' => 'Halaman User',
                'hak_akses' => 'User', 
                 
            );
            
            $this->session->set_userdata('user',$sess_array);
		    redirect('de69812784f2c02044e61be7t84cfe52'); 
        //echo 'halo';
	}
    
    public function masuk_akun(){
        $this->session->unset_userdata('user');
        $this->load->view('View_Masuk');
    }
    
    public function login()
	{
       //echo $encrypted_string = $this->encrypt->encode('gin');
        $username = $this->input->post('txt_username');
        $password = $this->input->post('txt_password');
        $this->load->model('Models_Login');
        $result = $this->Models_Login->get_user($username);
        foreach ($result as $a){
        if($username == $a->username && $password == $this->encrypt->decode($a->password)){
             $sess_array = array (
                'id_user' =>$a->id ,
                'nama_user' => $a->nama_user,
                'hak_akses' => $a->jabatan, 
                 
            );
            
            $this->session->set_userdata('user',$sess_array);
            redirect('de69812784f2c02044e61be7t84cfe52'); 
        } 
            
        }
        //print_r($result);
        redirect('ed3ceb87d825abdf4a52508302ef5037');
    }
    
     public function keluar()
    {
        $this->session->unset_userdata('user');
        redirect(''); 
        
    }
}
