<?php
class UsersModel extends Model{

    public function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    public function register(){

        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if($post['submit']){
            if($post['username'] == '' || $post['password'] == '' || $post['email'] == ''){
                return;
            }

            //check if email address already exists
            $this->query('SELECT * FROM users WHERE email = :email');
            $this->bind(':email', $post['email']);
            $row = $this->single();
            if($row) {
                $this->alert("An account with this email address already exists. Please try again");
                return;
            }
            else{
                //check if username already exists
                $this->query('SELECT * FROM users WHERE username = :username');
                $this->bind(':username', $post['username']);
                $row = $this->single();
                if($row){
                    $this->alert("This user name already exists. Please try again");

                    return;
                }
                else{
                    if ($post['password']!=$post['password2']) {
                        $this->alert("The passwords entered do not match. Please try again");
                    }
                    else {


                        if ($post['admincheck']) {
                            $admincheck = 1;
                        } else {
                            $admincheck = 0;
                        }
                        // execute insert query
                        // Insert into MySQL
                        $this->query('INSERT INTO users (username, password, email, is_admin) 
                                 VALUES(:username, :password, :email, :admin)');
                        $this->bind(':username', $post['username']);
                        $this->bind(':password', $password);
                        $this->bind(':email', $post['email']);
                        $this->bind(':admin', $admincheck);
                        $this->execute();
                        // Verify
                        if ($this->lastInsertId()) {
                            // Redirect
                            session_start();
                            if (isset($_SESSION['admin'])) {
                                $this->alert("User successfully created");
                            } else {
                                header('Location: ' . ROOT_URL . 'users/login');

                            }
                        }
                    }
                }
            }
        }
        return;
    }

    Public function login(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if($post['submit']){
            // Compare Login
            $this->query('SELECT * FROM users WHERE username = :username AND password = :password');
            $this->bind(':username', $post['username']);
            $this->bind(':password', $password);

            $row = $this->single();

            if($row){
                session_start();
                if($row['is_admin']=='1'){

                    $_SESSION['admin'] = true;
                }
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "username" => $row['username']
                );

                header('Location: '.ROOT_URL.'recipe');
            } else {
                $message = "Username and/or Password incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        return;
    }

}