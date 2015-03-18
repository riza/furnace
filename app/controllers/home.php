<?php


class Home extends Controller {

	
	public function index($data = '') {

		$user = $this->model('User');
		$user->name = $data;
		$this->view('home/index', ['name' => $user->name]);

	}




}