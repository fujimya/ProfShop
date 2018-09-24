<?php
class Models_User extends CI_Model{

    var $table = 'tbl_user';
    
    function list_user(){
        $data = $this->db->get('tbl_user');
        return $data;
    }
    function user_detail($nik){
        return $this->db->get_where('tbl_user',array('username'=>$nik))->row();
    } 
   
   public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->result();
	}
    
     public function get_by_name($id)
	{
		$this->db->from('tbl_user');
		$this->db->where('username',$id);
		$query = $this->db->get();

		return $query->result();
	}
    
    
    public function save($data)
	{
		$this->db->insert('tbl_user', $data);
		return $this->db->insert_id();
	}
    public function delete_by_name($id)
	{
		$this->db->where('username', $id);
		$this->db->delete($this->table);
	}
    
    public function delete_by_kode($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete($this->table);
	}
    
    public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}


}