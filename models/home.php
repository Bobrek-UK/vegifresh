<?php
class HomeModel extends Model{
    public function Index(){
        return;
    }

    public function Logout(){
        session_start();
        unset($_SESSION['admin']);
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        header('Location: '.ROOT_URL.'home');
        return;
    }
}