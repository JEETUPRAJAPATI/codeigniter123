<?php

class dash_item_add extends CI_Controller
{
	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('list_item');
	}
	public function index($offser=0)
	{
		$this->load->library('pagination');		
		$config = array();
		$config["base_url"] = base_url('dash_item_add');
	
		$config["total_rows"] = $this->list_item->get_record();
		$config["per_page"] = 2;
		$config['num_links'] = 5;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['item'] = $this->list_item->get_authors($config["per_page"], $page);
		$data['links'] = $this->pagination->create_links();
		$data['albumcount'] = $config["total_rows"];
		$this->load->view('dash_item/index.php', $data);
		
	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->list_item->delete($id);
		header("location:".base_url());
	}
	public function search()
	{	
			$name=$this->input->post("search_text");
			$data['item']=$this->list_item->search_info($name);
			$this->load->view('dash_item/index.php', $data);

	}
	public function update()
	{
		$id=$this->uri->segment(3);
		$data['item']=$this->list_item->record_show($id);
		$this->load->view('dash_item/update_form.php',$data);

	}
	public function update_record()
	{
		$array=array(
			'image' =>$this->input->post('image'),
			'name'  =>$this->input->post('name'),
			'price' =>$this->input->post('price'),
			'qnt'  =>$this->input->post('qnt'),
			'info' =>$this->input->post('comment')
		);
		$id=$this->uri->segment(3);
		$this->list_item->update_list($array,$id);
		header('location:'.base_url());
	}
	
   }



?>
