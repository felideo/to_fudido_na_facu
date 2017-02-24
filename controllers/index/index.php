<?php
namespace Controllers;

use Libs;

class Index extends \Libs\Controller {

	private $modulo = [
		'modulo' 	=> 'index',
		'name'		=> 'Index',
		'send'		=> 'Index'
	];

	public function __construct() {
		parent::__construct();
		$this->view->modulo = $this->modulo;
	}

	public function index() {
		// $redirect = URL . "organismo/cadastro";
		// header("location:$redirect");
		// exit;
		$this->view->clean_render('/index/index');
	}

	public function run() {
		$this->model->run();
	}

	public function buscar_taxonomia_select2(){
		$busca = carregar_variavel('busca');

		echo json_encode($this->model->buscar_taxonomia($busca));
		exit;
	}

	public function buscar_hierarquia_ajax(){
		$busca = carregar_variavel('id_clado');

		echo json_encode($this->model->buscar_hierarquia($busca));
		exit;
	}


}