<?php


class Home extends Controller {

	
	public function index($data = '') {

		/* 
			Bind data

			$this->view('home/index', ['name' => $user->name]);

		*/

		$this->view('home/index');

	}




}