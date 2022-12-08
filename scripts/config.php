<?php
   //kinda like js import but this one can store all files in one place
   // require_once("functions.php");
    //require_once("read.php");

    function get_threeDoors() {
        $connect = mysqli_connect("localhost", "root", "", "db_miniapp");
        $query = "SELECT * FROM tbl_threedoors";
        $result = mysqli_query($connect, $query);

        $car = array();

        while($row = mysqli_fetch_array($result)) {
            $car[] = array (
                'id' => $row["threedoors_id"],
                'model' => $row["threedoors_model"],
                'name' => $row["threedoors_name"],
                'image' => $row["threedoors_image"],
                'specs' => $row["threedoors_specs"],
                'price' => $row["threedoors_price"],
                'lease' => $row["threedoors_lease"],
                'lease_monthly' => $row["threedoors_lease_monthly"],
                'finance' => $row["threedoors_finance"],
                'finance_monthly' => $row["threedoors_finance_monthly"] 
            );
        }

        return json_encode($car);
    }

    file_put_contents('data.json', get_threeDoors());


   


?>