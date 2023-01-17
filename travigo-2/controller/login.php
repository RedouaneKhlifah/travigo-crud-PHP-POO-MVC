<?php

include_once "../module/methods.php";

class login extends methods  {

public function get_data($post){
    session_start();

        $this->set_gmail($post['gmail']);
        $this->set_password($post['password']);
        // var_dump($post['gmail']);
        // var_dump($post['password']);
        // die;
        $result  = $this->login();

        if ($result !== null){
            $_SESSION['gmail'] = $post['gmail'];
            $_SESSION['password'] = $post['password'];
            header("location:dashbord.php");
          
        }else {
            $_SESSION['msg'] = 'invalide entry';
        }
        
    } 
}
    