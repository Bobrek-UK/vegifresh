<?php
class IngredientModel extends Model{

    public $idd;

    public function Index(){
        $this->query('SELECT * FROM ingredient');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){
            // Insert into MySQL
            $this->query('INSERT INTO ingredient (name, county VALUES(:name, :county)');
            $this->bind(':name', $post['name']);
            $this->bind(':county', $post['county']);
            $this->execute();
            // Verify

            if($this->lastInsertId()){
                // Redirect
                header('Location: '.ROOT_URL.'recipe');
            }
        }
        return;

    }

    public function Single(){
        $this->query('SELECT * FROM ingredient where id = '. $_GET["id"] .' ');
        $rows = $this->resultSet();
        echo $this->idd;
        return $rows;
    }
}