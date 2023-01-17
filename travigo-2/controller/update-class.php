<?php

include_once "../module/methods.php";

class update extends methods{

public function update_date($post,$file)
{
    $this->set_place($post['place']);
    $this->set_price($post['price']) ;
    $this->set_from($post['from']) ;
    $this->set_until($post['until']) ;
    if (isset($file['img']['name'])){
        $this->set_img($file['img']['name']);
        $image_tpm = $file['img']['tmp_name'];
        $image_path ="../view/img/".$this->get_img();
        move_uploaded_file($image_tpm,$image_path);
        $this->update();
    }else {
        $this->update_No_img();
    }    

}
public function show_value(){
    $result = $this->update_display();
    $data = mysqli_fetch_assoc($result);
    return $data;

}

public function getId($get){
    $this->set_id($get["id"]);
}


}