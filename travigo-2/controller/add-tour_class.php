<?php 
include_once "../module/methods.php";

class tour extends methods {

    // public function get_tour_info($place , $price,$from,$until,$image_name){
    //     $conn = $this->connect();

    //     $sql  = "INSERT INTO tour (place,price,fromm,until,img) VALUES ('$place' , '$price','$from','$until','$image_name')";
    //     $req  = $conn->query($sql) ;

    // }


   

        // $image_tpm = $_FILES['img']['tmp_name'];
    // $image_path ="images/".$image_name;

    public function get_data($post,$file)
    {
        $this->set_place($post['place']);
        $this->set_price($post['price']) ;
        $this->set_from($post['from']) ;
        $this->set_until($post['until']) ;
        $this->set_img($file['img']['name']);
        $image_tpm = $file['img']['tmp_name'];
        $image_path ="img/" . $this->get_img();
        move_uploaded_file($image_tpm,$image_path);
       
        $this->insert();
    } 
    

}

