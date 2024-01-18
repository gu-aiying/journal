<?php

class Controller_Cities extends Controller {
	function __construct() {
		$this->model = new Model_Cities();
		$this->view = new View();
	}

	function action_index() {
		$data = $this->model->get_data();
		$this->view->generate('cities_view.php', 'template_view.php', $data);
	}

	function action_city() {
		$id_city = $_GET['id'];
		$data = $this->model->get_data($id_city);
		$this->view->generate('city_view.php', 'template_view.php', $data);
	}
}

?>