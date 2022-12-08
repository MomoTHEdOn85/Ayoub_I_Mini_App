<?php
/*
    //header("Access-Control-All-Origin"); //Commenting these headers out so the broswwer can see at php not as json
    //header("Content-Type: application/json; charset=UTF-8");
    ini_set('display_errors', 1); //dont want to leave these lines codes running on live server
    error_reporting(E_ALL);
    require_once("config.php");

    $getContent = getAll('tbl_cars');
    $label = "cars_name";

    $grpResult = "";
    $grpResult .= "{";
    if(!is_string($getContent)) {
      while ($conResult = mysqli_fetch_assoc($getContent)) {
        $jsonResult = "\"".conResult[$abel]."\"".": ".json_encode
        ($conResult, JSON_PRETTY_PRINT);
        $grpResult .= $jsonResult.",";
         
      }
      $grpResult = substr($grpResult, 0, -1);
      $grpResult = " }";
      echo $grpResult;
    }else {
      echo "<p>{$getContent}</p>";


    } 

    if(!is_string($getContent)) {
      $result = [];
      while($conResult = mysqli_fetch_assoc($getContent)) {
        $result[$conResult[$label]] = $conResult;

      }
      echo json_encode($result, JSON_PRETTY_PRINT);


    }else {
      echo $getContent;
      
    }

    */


?>