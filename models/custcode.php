<?php
/**
 * Created by PhpStorm.
 * User: Bobrek
 * Date: 21/02/2019
 * Time: 19:08
 */

class CustcodeModel extends Model{

    public $idd;

    public function Codequery(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']) {
            // Insert into MySQL
            header('Location: '.ROOT_URL.'custcode/single/'.$post['custcode']);

        }

        return;

    }

    public function Single(){
        $this->query('SELECT * FROM weeklyset WHERE custcode= "'.$_GET['id'].'"');
        $rows = $this->resultSet();
        if($rows){
            session_start();
            $_SESSION['validcode'] = true;
        }

        return $rows;


    }
}