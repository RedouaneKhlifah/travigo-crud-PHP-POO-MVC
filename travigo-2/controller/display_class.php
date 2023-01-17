<?php 
include_once "../module/methods.php";

class display extends methods {



    public function show(){
       


        // $sql = "SELECT * FROM tour";
        // $result = $this->connect()->query($sql);
        $result = $this->display();

        $numRows =$result->num_rows;
        if($numRows > 0){
            while($row =$result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
}

}
