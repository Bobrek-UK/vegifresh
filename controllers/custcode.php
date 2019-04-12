<?php
/**
 * Created by PhpStorm.
 * User: Bobrek
 * Date: 21/02/2019
 * Time: 19:08
 */
Class CustCode extends Controller
{

    protected function Codequery()
    {
        $viewmodel = new CustcodeModel();
        $this->returnView($viewmodel->Codequery(), true);
    }

    protected function Single()
    {
        $viewmodel = new CustcodeModel();
        $this->returnView($viewmodel->Single(), true);
    }
}