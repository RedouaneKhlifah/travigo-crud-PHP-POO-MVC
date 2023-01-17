<?php 
include_once "connexion.php";

class methods extends connection {
    private $place ;
    private $price ;
    private $from ;
    private $until ;
    private $img ;
    private $id;

    private $gmail;
    private $pass;

    public function set_place($place){
        $this->place = $place;
    }
    public function set_price($price){
        $this->price = $price;
    }
    public function set_from($from){
        $this->from = $from;
    }
    public function set_until($until){
        $this->until = $until;
    }

    public function set_img($img){
        $this->img = $img;
    }

    public function set_id($id){
        $this->id = $id;
    }

    




    public function get_place(){
        return $this->place ;
    }
    public function get_price(){
        return $this->price;
    }
    public function gzt_from(){
        return $this->from ;
    }
    public function get_until(){
        return $this->until ;
    }

    public function get_img(){
        return $this->img ;
    }
    public function get_id(){
        return $this->id;
    }


    public function set_gmail($gmail){
        $this->gmail = $gmail;
    }
    public function set_password($password){
        $this->pass = $password;
    }


    public function insert(){
        $sql  = "INSERT INTO tour (place,price,fromm,until,img) VALUES ('$this->place' , '$this->price','$this->from','$this->until','$this->img')";
        $result = $this->connect()->query($sql);
      }


      public function insertt(){
        $con  = $this->connect();
        $stmt  = $con->prepare("INSERT INTO tour (place,price,fromm,until,img)");
        $sql  = "INSERT INTO tour (place,price,fromm,until,img) VALUES ('$this->place' , '$this->price','$this->from','$this->until','$this->img')";
        $result = $this->connect()->query($sql);
      }


    public function display(){
    $sql = "SELECT * FROM tour";
    $result = $this->connect()->query($sql);
    return $result;
    }


    public function delete(){

        $sql = "DELETE from tour where id = $this->id";
        $result = $this->connect()->query($sql);
    }

    public function update_display(){
        $sql = "SELECT * from tour where id = $this->id ";
        $result = $this->connect()->query($sql);
        return $result;
    }

    public function update(){
        $sql = "UPDATE tour set place = '$this->place',price =  '$this->price',fromm = '$this->from',until = '$this->until' , img = '$this->img' where id = '$this->id' ";
        $result = $this->connect()->query($sql);
      }

      public function update_No_img(){
        $sql = "UPDATE tour set place = '$this->place',price =  '$this->price',fromm = '$this->from',until = '$this->until' where id = '$this->id' ";
        $result = $this->connect()->query($sql);
      }


    

        
    
    public function login(){

        // $this->gmail = $this->connect()->real_escape_string($this->gmail);
        // $this->password = $this->connect()->real_escape_string($this->password);

        // var_dump( $this->gmail);
        // var_dump( $this->password);
        // die;
        $con  =  $this->connect();

        $stmt = $con->prepare("SELECT * FROM admin WHERE gmail = ? AND `password` = ?");

        $stmt->bind_param("ss", $this->gmail, $this->pass);
        $stmt->execute();
        // var_dump($this->pass);
        // var_dump($this->gmail);
        // $stmt->execute();
        // var_dump( $stmt);
        // die;

    $result = $stmt->fetch();
   

        // $sql = "SELECT * from admin where gmail = '$this->gmail' and password = '$this->password' ";
        // $result = $this->connect()->query($sql);

        return $result;
    }

    public function session(){
        session_start();
        if (!isset($_SESSION['gmail']) and !isset($_SESSION['password'])){
            header("location:login.php");
        }}





}