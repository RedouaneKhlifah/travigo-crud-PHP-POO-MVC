<?php


  class connection{
    public $servername;
    public $username;
    public $password;
    public $dbname;




    public function connect(){
        $this->servername='localhost:3308';
        $this->username='root';
        $this->password='';
        $this->dbname='tour';

        $conn = new mysqli($this->servername,$this->username, $this->password,$this->dbname); 

        return $conn;
    }





}

?>