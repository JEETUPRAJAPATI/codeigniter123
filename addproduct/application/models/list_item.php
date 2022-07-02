<?php

class list_item extends CI_Model
{
	public function __construct()
	{
			parent::__construct();
			$this->load->database();
			
	}	

	public function get_record()
	{		
		$data=$this->db->get('product');
		return $data->result_array();
	}


	public function delete($id)
	{

		$this->db->where('id',$id);
		$this->db->delete('product');
	

	}
	public function record_show($id)
	{
			$this->db->where('id',$id);
			$data=$this->db->get('product');
			$info=$data->result_array();

			return $info[0];
	}
	public function update_list($array,$id)
	{
		$id=$this->db->where('id',$id);
		$this->db->update('product',$array);
	}
	
	public function insert_data($array)
	{
		$this->db->insert('product',$array);
		

	}



}


?>
