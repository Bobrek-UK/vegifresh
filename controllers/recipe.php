<?php
class Recipe extends Controller{
	protected function Index(){
		$viewmodel = new RecipeModel();
		$this->ReturnView($viewmodel->Index(), true);
	}

	protected function add(){
	    $viewmodel = new RecipeModel();
	    $this->returnView($viewmodel->add(), true);
	    }

    protected function single(){
        $viewmodel = new RecipeModel();
        $this->returnView($viewmodel->single(), true);
    }

    protected function filter(){
        $viewmodel = new RecipeModel();
        $this->returnView($viewmodel->Filter(), true);
    }

    protected function allergenfilter(){
        $viewmodel = new RecipeModel();
        $this->returnView($viewmodel->Allergenfilter(), true);
    }

    protected function edit(){
        $viewmodel = new RecipeModel();
        $this->returnView($viewmodel->edit(), true);
    }

}