<?php

function get_countyMan() {
  $connect = mysqli_connect("localhost", "root", "", "db_miniapp");
  $query = "SELECT * FROM tbl_countyman";
  $result = mysqli_query($connect, $query);

  $car = array();

  while($row = mysqli_fetch_array($result)) {
      $car[] = array (
          'id' => $row["countyman_id"],
          'model' => $row["countyman_model"],
          'name' => $row["countyman_name"],
          'image' => $row["countyman_image"],
          'specs' => $row["countyman_specs"],
          'price' => $row["countyman_price"],
          'lease' => $row["countyman_lease"],
          'lease_monthly' => $row["countyman_lease_monthly"],
          'finance' => $row["countyman_finance"],
          'finance_monthly' => $row["countyman_finance_monthly"] 
      );
  }

  return json_encode($car);
}

file_put_contents('datac.json', get_countyMan());
 
 

 
?>