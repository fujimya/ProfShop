<?php
class Models_Login extends CI_Model{

    var $table = 'tbl_user';
    
    function get_user($username){
        $data = $this->db->select('*')->from('tbl_user')->where('username',$username)->limit(1)->get()->result();
        return $data;
    }
}