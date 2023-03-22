<?php


class Pro4 extends CI_Controller {
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Crud_model');
	}
        /*Insert*/
	public function contact()
	{
		/*load registration view form*/
		$this->load->view('contact');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['subject']=$this->input->post('subject');
			$response=$this->Crud_model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
	public function displaydata()
  {
      $result['data']=$this->Crud_model->display_records();
      $this->load->view('display_records',$result);
  }

  public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Crud_model->displayrecordsById($id);
	$this->load->view('update_records',$result);
	
		if($this->input->post('update'))
		{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$subject=$this->input->post('subject');
		$this->Crud_model->update_records($name,$email,$subject,$id);
		echo "Date updated successfully !";
		}
	}

	public function deletedata()
{
  $id=$this->input->get('id');
  $response=$this->Crud_model->deleterecords($id);
  if($response==true){
    echo "Data deleted successfully !";
}
  else{
    echo "Error !";
  }
}
	public function index()
	{
		$this->load->view('index');
	}
	public function single()
	{
		$this->load->view('single');
	}
	// public function contact()
	// {
	// 	$this->load->view('contact');
	// }
	// public function insert()
	// {
	// 	$this->load->view('insert');
	// }
}
?>