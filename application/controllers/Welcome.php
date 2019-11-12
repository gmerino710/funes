<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// constructor herada valores delñ padre e inicializa
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('html');
		$this->load->model('Model_listado','lista');
	}

	public function value_label()
	{
		$labels =array('tareas'=>'Lista de Tareas','boton1'=>'crear','boton2'=>'Nueva');
	
		return $labels;
	}

	public function index()
	{
		/*$data['delete_img'] = array(
			'src'   => 'Assets/img/delete.png',
			'alt'   => 'Me, demonstrating how to eat 4 slices of pizza at one time',
			'class' => 'post_images',
			'width' => '200',
			'height'=> '200',
			'title' => 'That was quite a night',
			'rel'   => 'lightbox'
		);*/
		
		$data =$this->value_label();
		$data['listado']=$this->lista->listar3(1);
		$data['stado']=$this->lista->Nestados(1);
		// mandar valor
		$data['delete_img'] = array(
			'src'   => 'Assets/img/delete.png',
			'alt'   => 'Me, demonstrating how to eat 4 slices of pizza at one time',
			'class' => 'post_images',
			'title' => 'That was quite a night',
			'rel'   => 'lightbox'
		);
		
		$data['edit_img'] = array(
			'src'   => 'Assets/img/edit.png',
			'alt'   => 'Me, demonstrating how to eat 4 slices of pizza at one time',
			'class' => 'img-thumbnail',
			'title' => 'That was quite a night',
			'rel'   => 'lightbox'
		);
		
		


		$this->load->view('welcome_message',$data);
	}


	

	public function procesar()
	{
		$fecha = date('y-m-d');

		$data= array('Item' =>$this->input->post('Item'),
					'Descripcion'=>$this->input->post('Descripcion'),	
						 'Fecha'=>$fecha,
						 'Id_tipo'=>$this->input->post('tipo')
							
							
							);
		$this->lista->create_item($data);
		
		redirect('welcome');
	}
// funcion de borrado
	public function procesar_del($id)
	{
		$this->lista->del_item($id);
		$data =array('tareas'=>'Lista de Tareas','boton1'=>'crear');
		$data['listado']=$this->lista->listar3(1);
	
			redirect('welcome');
		
	}
	

	public function tarea($id)
	{
		$data['segmento']=$this->uri->segment(2,0);	
	$this->load->helper('date');

	$data['list']=$this->lista->show_list($id);

	$this->load->view('tareas',$data);
	}

	// Cambiar estado
	public function Change_state($id)
	{
		$finish ='st4';

		$estado= array(
			'Id_tipo'=>$finish
		);
	// enviar info

	$this->lista->finalizada($estado,$id);
			redirect("/tarea/$id");
	}


	// borrar todo

	public function delete_all()
	{
		// funcion borrart
		$this->lista->truncate_data();
		redirect('welcome');
	}
}
