<?php
class Recipeset extends Controller{
	
	protected function Index(){
		$viewmodel = new RecipesetModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
	protected function Add(){
		$viewmodel = new RecipesetModel();
		$this->returnView($viewmodel->add(), true);
	}
	
	protected function edit(){
		$viewmodel = new RecipesetModel();
		$this->returnView($viewmodel->edit(), true);
	}
	
}
?>
