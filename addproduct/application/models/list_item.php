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
	
		return $data->num_rows();
	}

	public function get_authors($limit, $start) {
        $this->db->limit($limit);
		$this->db->offset($start);
        $query = $this->db->get('product');
        return $query->result_array();
    }

	public function search_info($name)
	{
		$this->db->select("*");
		$this->db->from('product');
		$this->db->like('image',$name);
		$this->db->or_like('name',$name);
		$ans=$this->db->get();
		return $ans->result_array();
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
}


?>
