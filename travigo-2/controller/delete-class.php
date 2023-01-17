<?php
include_once "../module/methods.php";

class delete extends methods{

    public function getId($get){
        $this->set_id($get["id"]);
        $this->delete();
        header("location:../view/dashbord.php");
    }
}