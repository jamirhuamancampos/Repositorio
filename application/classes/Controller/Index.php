<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

	public $template = 'TemplateIndex';
	
	public function action_index()
	{
		//obtenemos todas las filas de la tabla
		$recursos = ORM::factory('recurso')->find_all();

		//si existen datos
		if(isset($recursos[0]))
		{
			//agregamos al template o a lavista la tabla recursos
			$this->template->content = View::factory('Index/Recurso')->bind('recursos',$recursos);
		}		
		else
		{	
			//agregamos al template una tabla vacia
			$recursos = array();
			$this->template->content = View::factory('Index/Recurso')->bind('recursos',$recursos);
		}

	}

	public function action_formulario(){
		//obtenemos el id si esta editando. si esta agregando uno nuevo estara vacio
		$id = $this->request->param('id');

		//obtenemos el recurso segun el id, en caso de agreegar un nuevo no obtenemos datos
		$recurso = ORM::factory('recurso',$id);

		//agregar a la vista el recurso en caso lo hemos obtenido
		$this->template->content = View::factory('Index/Editar')->bind('recurso',$recurso);
	}

	public function action_registrar(){
		$recurso = ORM::factory('recurso',$_POST['id']);

		unset($_POST['id']);

		//obtener todos los datos
		$recurso->values($_POST);

		//guardar
		$recurso->save();		

		//redireccionar a la pagina principal
		HTTP::redirect('Index');
	}

	public function action_eliminar(){

		//obtener el codigo principal
		$id = $this->request->param('id');

		//eliminar
		$recurso = ORM::factory('recurso',$id)->delete();

		//redireccionar a la pagina principal
		HTTP::redirect('Index');	
	}

} // End Welcome
