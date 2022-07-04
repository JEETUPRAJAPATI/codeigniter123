<?php

class dash_item_add extends CI_Controller
{
	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('list_item');
	}
	public function index()
	{
		$this->load->view('index.php');	
	}
	public function dashboard_item()
	{
		// $this->load->library('pagination');		
		// $config = array();
		// $config["base_url"] = base_url('dash_item_add/dashboard_item');
	
		// $config["total_rows"] = $this->list_item->get_record();
		// $config["per_page"] = 2;
		// $config['num_links'] = 5;
		// $config["uri_segment"] = 3;
		// $this->pagination->initialize($config);
		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		// $data['item'] = $this->list_item->get_authors($config["per_page"], $page);
		// $data['links'] = $this->pagination->create_links();
		// $data['albumcount'] = $config["total_rows"];
		// $data['item']=$this->list_item->get_record();
		// $this->load->view('dash_item/index.php', $data);

		$data['item']=$this->list_item->get_record();

		$this->load->view('dash_item/index.php', $data);

	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->list_item->delete($id);
		header('location:'.base_url('dash_item_add/dashboard_item'));
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
		header('location:'.base_url('dash_item_add/dashboard_item'));

	}

	public function referesh()
	{
		$data['item']=$this->list_item->get_record();
		$this->load->view('dash_item/index.php',$data);
	}
	public function add_user()
	{

		$this->load->view("dash_item/add_item");
	}
	
	public function insert()
	{
	
		
		
		
			if($this->input->post('submit'))
			{

				// $this->load->helper('form');
				// $this->load->library('form_validation');
				// $this->form_validation->set_rules('name', 'name', 'required');
				// $this->form_validation->set_rules('price', 'price', 'required');
				// $this->form_validation->set_rules('qnt', 'quntity', 'required');
				// $this->form_validation->set_rules('comment', 'comment', 'required');
			
				// if($this->form_validation->run() == FALSE)
				// {
					
				// 	$this->load->view("dash_item/add_item.php");
				// }

				// else
				// {
						if($img1=$_FILES['image']['name'])
						{
							
								$this->load->library('upload');
								$config['upload_path'] = 'upload/';
								$config['allowed_types'] = 'jpg|png|jpeg';     
								$this->upload->initialize($config);
								if ($this->upload->do_upload('image'))
								{
									$data = $this->upload->data();
									$image=$data['file_name'];
									print_r($image);
										$array=array(
											'image' =>$image,
											'name'  =>$this->input->post('name'),
											'price' =>$this->input->post('price'),
											'qnt'  =>$this->input->post('qnt'),
											'info' =>$this->input->post('comment')
										);
										if($array)
										{
											$this->list_item->insert_data($array);
											header('location:'.base_url('dash_item_add/dashboard_item'));
										}
								}
								else
								{
									?>
											<script>
												alert("Only Allow Image jpeg/jpg File");
											</script>

										<?php
											$this->load->view('dash_item/add_item');
									
								}
						}
					
						if($img1=$_FILES['image1']['name'])
						{
							
								$this->load->library('upload');
								$config['upload_path'] = 'upload/';
								$config['allowed_types'] = 'txt|csv|doc';     
								$this->upload->initialize($config);
								if ($this->upload->do_upload('image1'))
								{
									$data = $this->upload->data();
									$image=$data['file_name'];
									print_r($image);
										$array=array(
											'image' =>$image,
											'name'  =>$this->input->post('name'),
											'price' =>$this->input->post('price'),
											'qnt'  =>$this->input->post('qnt'),
											'info' =>$this->input->post('comment')
										);
										if($array)
										{
											$this->list_item->insert_data($array);
											header('location:'.base_url('dash_item_add/dashboard_item'));
										}
								}
								else
								{
										?>
											<script>
												alert("Only Allow text File");
											</script>

										<?php
											$this->load->view('dash_item/add_item');

								}
						}
						if($img1=$_FILES['image2']['name'])
						{
							
								$this->load->library('upload');
								$config['upload_path'] = 'upload/';
								$config['allowed_types'] = 'jpg|png|jpeg';     
								$this->upload->initialize($config);
								if ($this->upload->do_upload('image2'))
								{
									$data = $this->upload->data();
									$image=$data['file_name'];
									print_r($image);
										$array=array(
											'image' =>$image,
											'name'  =>$this->input->post('name'),
											'price' =>$this->input->post('price'),
											'qnt'  =>$this->input->post('qnt'),
											'info' =>$this->input->post('comment')
										);
										if($array)
										{
											$this->list_item->insert_data($array);
											header('location:'.base_url('dash_item_add/dashboard_item'));
										}
								}
								else
								{
									?>
									<script>
										alert("Only Allow Image File");
									</script>

								<?php
									$this->load->view('dash_item/add_item');
								}
						}
						if($img1=$_FILES['image3']['name'])
						{
							
								$this->load->library('upload');
								$config['upload_path'] = 'upload/';
								$config['allowed_types'] = 'pdf|html';     
								$this->upload->initialize($config);
								if ($this->upload->do_upload('image3'))
								{
									$data = $this->upload->data();
									$image=$data['file_name'];
									print_r($image);
										$array=array(
											'image' =>$image,
											'name'  =>$this->input->post('name'),
											'price' =>$this->input->post('price'),
											'qnt'  =>$this->input->post('qnt'),
											'info' =>$this->input->post('comment')
										);
										if($array)
										{
											$this->list_item->insert_data($array);
											header('location:'.base_url('dash_item_add/dashboard_item'));
										}
								}
								else
								{
									?>
									<script>
										alert("Only Allow PDF File");
									</script>

								<?php
									$this->load->view('dash_item/add_item');
								}
						}
						if($img1=$_FILES['image4']['name'])
						{
							
								$this->load->library('upload');
								$config['upload_path'] = 'upload/';
								$config['allowed_types'] = 'video|mp4';     
								$this->upload->initialize($config);
								if ($this->upload->do_upload('image4'))
								{
									$data = $this->upload->data();
									$image=$data['file_name'];
									print_r($image);
										$array=array(
											'image' =>$image,
											'name'  =>$this->input->post('name'),
											'price' =>$this->input->post('price'),
											'qnt'  =>$this->input->post('qnt'),
											'info' =>$this->input->post('comment')
										);
										if($array)
										{
											$this->list_item->insert_data($array);
											header('location:'.base_url('dash_item_add/dashboard_item'));
										}
								}
								else
								{
									?>
									<script>
										alert("Only Allow MP4 File");
									</script>

								<?php
									$this->load->view('dash_item/add_item');
								}
						}
					// }

			}
	}

	
	
	}


   

?>
