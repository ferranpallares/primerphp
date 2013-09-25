<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class primaria extends CI_Controller {

	
	public function Index()
	{
		$this->load->view('menu');
	}
	public function create_user(){
		echo 'Per crear Usuaris';
		//$this->load->view('create_user');
	}
	public function modify_user(){
		//$this->load->view('mody_user');
		echo 'Per modificar Usuaris';
	}
	public function rm_user(){
		//$this->load->view('rm_user');
		echo 'Per eliminar Usuaris';
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
//public function prova(){
		//echo'<h1>HOLA</h1>';	
	//}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
