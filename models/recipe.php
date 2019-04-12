<?php
class RecipeModel extends Model{

    public $idd;

    public function Index(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']) {
            // Insert into MySQL
            header('Location: '.ROOT_URL.'recipe/filter/'.$post['nationality']);

            // Verify


        }
        else if($post['allergen']) {
            // Insert into MySQL

            if (isset($post['Vegetarian'])){
                $vegetarian = 1;
            }else {
                $vegetarian = 0;
            }
            if (isset($post['Vegan'])){
                $vegan = 1;
            }else {
                $vegan = 0;
            }
            if (isset($post['Dairy'])){
                $dairy = 1;
            }else {
                $dairy = 0;
            }
            if (isset($post['Eggs'])){
                $eggs = 1;
            }else {
                $eggs = 0;
            }
            if (isset($post['Wheat'])){
                $wheat = 1;
            }else {
                $wheat = 0;
            }
            if (isset($post['TreeNuts'])){
                $treenuts = 1;
            }else {
                $treenuts = 0;
            }
            if (isset($post['Peanuts'])){
                $peanuts = 1;
            }else {
                $peanuts = 0;
            }
            if (isset($post['Shellfish'])){
                $shellfish = 1;
            }else {
                $shellfish = 0;
            }
            if (isset($post['Soy'])){
                $soy = 1;
            }else {
                $soy = 0;
            }
            if (isset($post['Fish'])){
                $fish = 1;
            }else {
                $fish = 0;
            }
            header('Location: '.ROOT_URL.'recipe/allergenfilter/'.$vegetarian.$vegan.$dairy.$eggs.$wheat.$treenuts.$peanuts.$shellfish.$soy.$fish);

            // Verify


        }

        $this->query('SELECT * FROM recipe ORDER BY id DESC');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){

            if (isset($post['Vegan'])){
                $vegan = 1;
                $vegetarian = 1;
            }else {
                if (isset($post['Vegetarian'])) {
                    $vegan = 0;
                    $vegetarian = 1;
                } else {
                    $vegan = 0;
                    $vegetarian = 0;
                }
            }
            if (isset($post['Dairy'])){
                $dairy = 1;
            }else {
                $dairy = 0;
            }
            if (isset($post['Eggs'])){
                $eggs = 1;
            }else {
                $eggs = 0;
            }
            if (isset($post['Wheat'])){
                $wheat = 1;
            }else {
                $wheat = 0;
            }
            if (isset($post['TreeNuts'])){
                $treenuts = 1;
            }else {
                $treenuts = 0;
            }
            if (isset($post['Peanuts'])){
                $peanuts = 1;
            }else {
                $peanuts = 0;
            }
            if (isset($post['Shellfish'])){
                $shellfish = 1;
            }else {
                $shellfish = 0;
            }
            if (isset($post['Soy'])){
                $soy = 1;
            }else {
                $soy = 0;
            }
            if (isset($post['Fish'])){
                $fish = 1;
            }else {
                $fish = 0;
            }

            // Insert into MySQL
            $this->query('INSERT INTO recipe (name, nationality, instructions, image, Vegetarian ,Vegan, 
                    Dairy, Eggs, Wheat, Treenuts, Peanuts, Shellfish, Soy, Fish) 
                    VALUES (:name, :nationality, :instructions, :image, '.$vegetarian.', '.$vegan.', '.$dairy.', '
                .$eggs.', '.$wheat.', '.$treenuts.', '.$peanuts. ', '.$shellfish.', '.$soy.', '.$fish.')');
            $this->bind(':name', $post['name']);
            $this->bind(':nationality', $post['nationality']);
            $this->bind(':instructions', $post['instructions']);
            $this->bind(':image', $post['image']);
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
        $this->query('SELECT * FROM recipe where id = '. $_GET["id"] .' ');
        $rows = $this->resultSet();
        echo $this->idd;
        return $rows;
    }


    public function Filter(){
        $this->query('SELECT * FROM recipe WHERE nationality = "'. $_GET["id"] .'" ORDER BY id DESC');
        $rows = $this->resultSet();
        echo $this->idd;
        return $rows;
    }

    public function Allergenfilter(){

        $leftovers = $_GET["id"];
        $fish = $leftovers%10;
        $leftovers = ($leftovers-$fish)/10;
        $soy = $leftovers%10;
        $leftovers = ($leftovers-$soy)/10;
        $shellfish = $leftovers%10;
        $leftovers = ($leftovers-$shellfish)/10;
        $peanuts = $leftovers%10;
        $leftovers = ($leftovers-$peanuts)/10;
        $treenuts = $leftovers%10;
        $leftovers = ($leftovers-$treenuts)/10;
        $wheat = $leftovers%10;
        $leftovers = ($leftovers-$wheat)/10;
        $eggs = $leftovers%10;
        $leftovers = ($leftovers-$eggs)/10;
        $dairy = $leftovers%10;
        $leftovers = ($leftovers-$dairy)/10;
        $vegan = $leftovers%10;
        $leftovers = ($leftovers-$vegan)/10;
        $vegetarian = $leftovers%10;


        if ($dairy == 0 && $eggs == 0 && $wheat == 0 && $treenuts == 0 && $peanuts == 0 && $shellfish == 0 && $soy == 0
            && $fish == 0 && $vegetarian == 0 && $vegan == 0) {
            $this->query('SELECT * FROM recipe ORDER BY id DESC');
        }
        else {
            if ($vegetarian == 1) {
                if ($vegan == 1 || $dairy == 1 || $eggs == 1 || $wheat == 1 || $treenuts == 1 || $peanuts == 1 || $shellfish == 1 || $soy == 1
                    || $fish == 1) {
                    $nine = 'Vegetarian = 1 AND ';
                } else $nine = 'Vegetarian = 1 ';
            } else {
                $nine = '';
            }
            if ($vegan == 1) {
                if ($dairy == 1 || $eggs == 1 || $wheat == 1 || $treenuts == 1 || $peanuts == 1 || $shellfish == 1 || $soy == 1
                    || $fish == 1) {
                    $ten = 'Vegan = 1 AND ';
                } else $ten = 'Vegan = 1 ';
            } else {
                $ten = '';
            }
            if ($dairy == 1) {
                if ($eggs == 1 || $wheat == 1 || $treenuts == 1 || $peanuts == 1 || $shellfish == 1 || $soy == 1
                    || $fish == 1) {
                    $one = 'Dairy = 0 AND ';
                } else $one = 'Dairy = 0 ';
            } else {
                $one = '';
            }
            if ($eggs == 1) {
                if ($wheat == 1 || $treenuts == 1 || $peanuts == 1 || $shellfish == 1 || $soy == 1
                    || $fish == 1) {
                    $two = 'Eggs = 0 AND ';
                } else $two = 'Eggs = 0 ';
            } else {
                $two = '';
            }
            if ($wheat == 1) {
                if ($treenuts == 1 || $peanuts == 1 || $shellfish == 1 || $soy == 1 || $fish == 1) {
                    $three = 'Wheat = 0 AND ';
                } else $three = 'Wheat = 0 ';
            } else {
                $three = '';
            }
            if ($treenuts == 1) {
                if ($peanuts == 1 || $shellfish == 1 || $soy == 1 || $fish == 1) {
                    $four = 'Treenuts = 0 AND ';
                } else $four = 'Treenuts = 0 ';
            } else {
                $four = '';
            }
            if ($peanuts == 1) {
                if ($shellfish == 1 || $soy == 1 || $fish == 1) {
                    $five = 'Peanuts = 0 AND ';
                } else $five = 'Peanuts = 0 ';
            } else {
                $five = '';
            }
            if ($shellfish == 1) {
                if ($soy == 1 || $fish == 1) {
                    $six = 'Shellfish = 0 AND ';
                } else $six = 'Shellfish = 0 ';
            } else {
                $six = '';
            }
            if ($soy == 1) {
                if ($fish == 1) {
                    $seven = 'Soy = 0 AND ';
                } else $seven = 'Soy = 0 ';
            } else {
                $seven = '';
            }
            if ($fish == 1) {
                $eight = 'Fish = 0 ';
            } else {
                $eight = '';
            }

            $this->query('SELECT * FROM recipe WHERE '.$nine.$ten.$one.$two.$three.$four.$five.$six.$seven.$eight.'ORDER BY id DESC');
        }
        $rows = $this->resultSet();
        echo $this->idd;
        return $rows;
    }


    public function edit(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if($post['submit']){

            if (isset($post['Vegan'])){
                $vegan = 1;
                $vegetarian = 1;
            }else {
                if (isset($post['Vegetarian'])) {
                    $vegan = 0;
                    $vegetarian = 1;
                } else {
                    $vegan = 0;
                    $vegetarian = 0;
                }
            }
            if (isset($post['Dairy'])){
                $dairy = 1;
            }else {
                $dairy = 0;
            }
            if (isset($post['Eggs'])){
                $eggs = 1;
            }else {
                $eggs = 0;
            }
            if (isset($post['Wheat'])){
                $wheat = 1;
            }else {
                $wheat = 0;
            }
            if (isset($post['TreeNuts'])){
                $treenuts = 1;
            }else {
                $treenuts = 0;
            }
            if (isset($post['Peanuts'])){
                $peanuts = 1;
            }else {
                $peanuts = 0;
            }
            if (isset($post['Shellfish'])){
                $shellfish = 1;
            }else {
                $shellfish = 0;
            }
            if (isset($post['Soy'])){
                $soy = 1;
            }else {
                $soy = 0;
            }
            if (isset($post['Fish'])){
                $fish = 1;
            }else {
                $fish = 0;
            }


            $this->query('UPDATE recipe SET name = :name, nationality = :nation, instructions = :inst, 
                  image = :image, Vegetarian='. $vegetarian. ',Vegan= '. $vegan. ',Dairy='. $dairy.'
                   , Eggs='. $eggs. ',Wheat= '. $wheat. ',Treenuts='. $treenuts.', Peanuts='. $peanuts. '
                   ,Shellfish= '. $shellfish. ',Soy='. $soy.',Fish='. $fish.' where id= '. $post['id']);
            $this->bind(':name', $post['name']);
            $this->bind(':nation', $post['nationality']);
            $this->bind(':inst', $post['instructions']);
            $this->bind(':image', $post['image']);
            $this->execute();
            header('location: '.ROOT_URL.'recipe/single/'.$post['id']);


        }
        else {
            if ($post['delete']) {
                $this->query('Delete from recipe WHERE id= ' . $post['id']);
                $this->execute();
                header('Location: ' . ROOT_URL . 'recipe/');
            }
        }

        $this->query('SELECT * FROM recipe where id= '.$_GET["id"]);
        $rows = $this->resultSet();
        return $rows;



    }
}