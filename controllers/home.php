<?php
class Home extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->ReturnView($viewmodel->Index(), true);
	}

    protected function Logout(){
        $viewmodel = new HomeModel();
        $this->ReturnView($viewmodel->Logout(), true);
    }
}