<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

	private $session;

	public function before()
	{
		parent::before();
		Session::$default = 'database';
		$this->session = Session::instance();		
	}	

	public function action_login()
	{
		//obtenemos el nombre de usuario
		$username = $this->request->post('username');

		//obtenemos el password
		$password = $this->request->post('password');
		
		//verificamos si son los datos correctos
		if($username=='admin' && $password=='pass')
		{
			$this->session->set('logged_in',true);				
			$this->session->set('username',$username);
		}

		HTTP::redirect('Index');		
	}

	public function action_logout()
	{		
		$this->session->delete('logged_in');	
		HTTP::redirect('Index');			
	}	

} // End Welcome
