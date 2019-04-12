<?php
class Ingredient extends Controller{
	protected function Index(){
		$viewmodel = new IngredientModel();
		$this->ReturnView($viewmodel->Index(), true);
	}

    protected function add(){
        $viewmodel = new IngredientModel();
        $this->returnView($viewmodel->add(), true);
    }

    protected function single(){
        $viewmodel = new IngredientModel();
        $this->returnView($viewmodel->single(), true);
    }
}