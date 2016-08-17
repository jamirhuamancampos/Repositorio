<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {
	
	public $template = 'TemplateIndex';
	
	private $session;

	public function before()
	{
		parent::before();
		Session::$default = 'database';
		$this->session = Session::instance();		

		//si no esta logueado
		if($this->is_logged_in()!=true)
		{			
			//indicamos la vista del login			
			$this->template = View::factory('Login');			
		}	
	}	

	//funcion para obtener la variable de login
	private function is_logged_in()
	{	
		//obtenemos la variable de session 
		return $this->session->get('logged_in');
	}
		
	public function action_index()
	{
		if($this->is_logged_in()==true)
		{
			$usuario = $this->session->get('username');

			//obtenemos todas las filas de la tabla
			$recursos = ORM::factory('recurso')->find_all();
			$editoriales = ORM::factory('editorial')->find_all();

			//si existen datos
			if(isset($recursos[0]))
			{
				$this->template->usuario = $usuario;
				//agregamos al template o a lavista la tabla recursos
				$this->template->content = View::factory('Index/Recurso')->bind('recursos',$recursos)->bind('editoriales',$editoriales);
			}		
			else
			{	
				//agregamos al template una tabla vacia
				$this->template->usuario = $usuario;
				$recursos = array();
				$this->template->content = View::factory('Index/Recurso')->bind('recursos',$recursos)->bind('editoriales',$editoriales);
			}
		}
	}

	public function action_agregar(){
		//obtenemos el id si esta editando. si esta agregando uno nuevo estara vacio
		$id = $this->request->param('id');

		//obtenemos el recurso segun el id, en caso de agreegar un nuevo no obtenemos datos
		$recurso = ORM::factory('recurso',$id);

		$editoriales = ORM::factory('editorial')->find_all();

		$usuario = $this->session->get('username');

		$this->template->usuario = $usuario;
		
		//agregar a la vista el recurso en caso lo hemos obtenido
		$this->template->content = View::factory('Index/Agregar')->bind('editoriales',$editoriales);
	}

	public function action_registrar(){
		$recurso = ORM::factory('recurso');

		//obtener todos los datos
		$recurso->values($_POST);

		//guardar
		$recurso->save();		

		//redireccionar a la pagina principal
		HTTP::redirect('Index');		
	}

	public function action_editar(){
		//obtenemos el id si esta editando. si esta agregando uno nuevo estara vacio
		$id = $this->request->param('id');

		//obtenemos el recurso segun el id, en caso de agreegar un nuevo no obtenemos datos
		$recurso = ORM::factory('recurso',$id);

		$editoriales = ORM::factory('editorial')->find_all();

		$usuario = $this->session->get('username');

		$this->template->usuario = $usuario;
		
		//agregar a la vista el recurso en caso lo hemos obtenido
		$this->template->content = View::factory('Index/Editar')->bind('recurso',$recurso)->bind('editoriales',$editoriales);
	}
	
	public function action_actualizar(){
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
