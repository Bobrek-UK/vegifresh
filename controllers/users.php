<?php
class Users extends Controller{
	

	
	protected function register(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->register(), true);
	}
	
	protected function login(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->login(), true);
	}
	
}
?>
