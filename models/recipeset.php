<?php
class RecipesetModel extends Model{
    public function Index(){
        session_start();
        if(empty($_SESSION['admin'])) {
            $this->query('SELECT * FROM weeklyset Where deliverydate >= CURRENT_DATE() - INTERVAL 1 WEEK 
                    AND deliverydate <= CURRENT_DATE() + INTERVAL 4 WEEK ORDER BY deliverydate DESC;');
        }
        else{
            $this->query('SELECT * FROM weeklyset ORDER BY deliverydate DESC;');
        }
        $rows = $this->resultSet();
        return $rows;
    }

    public function edit(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if($post['submit']){

            if (isset($post['available'])){
                $avail = 1;
            }else{
                $avail = 0;
            }


            $this->query('UPDATE recipeset SET deliverydate = :delivery, rid1='. $post['rid1'].
                ',rid2='. $post['rid2']. ',rid3='. $post['rid3']. ',rid4='. $post['rid4']. ',rid5='. $post['rid5'].
                ',available='. $avail.' where wid= '. $post['wid']);
            $this->bind(':delivery', $post['delivery']);
            $this->execute();


        }

        else if($post['delete']) {
            $this->query('Delete from recipeset WHERE wid= '.$post['wid']);
            $this->execute();
            header('Location: '.ROOT_URL.'recipeset/');
        }

        $this->query('SELECT * FROM recipeset where wid= '.$_GET["id"]);
        $rows = $this->resultSet();
        return $rows;



    }

    public function add(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){

            if (isset($post['available'])){
                $avail = 1;
            }else{
                $avail = 0;
            }

            // Insert into MySQL
            $this->query('INSERT INTO recipeset (deliverydate, rid1, rid2, rid3, rid4, rid5, available, custcode) 
                       VALUES(:delivery, :rid1, :rid2, :rid3, :rid4, :rid5, '.$avail.', :code)');
            $this->bind(':delivery', $post['delivery']);
            $this->bind(':rid1', $post['rid1']);
            $this->bind(':rid2', $post['rid2']);
            $this->bind(':rid3', $post['rid3']);
            $this->bind(':rid4', $post['rid4']);
            $this->bind(':rid5', $post['rid5']);
            $this->bind(':code', $post['code']);
            $this->execute();
            // Verify

            if($this->lastInsertId()){
                // Redirect
                header('Location: '.ROOT_URL.'recipeset');
            }
        }

        $this->query('SELECT * FROM recipe ORDER BY id DESC');
        $rows = $this->resultSet();
        return $rows;

        return;

    }





}