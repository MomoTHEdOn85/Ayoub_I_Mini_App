<?php
/*

    //Thia file is for running our queries

    //Get all of something....
  $tbl = "tbl_cars"; //Remove this when done testing
  getAll($tbl);//This is also for testing only


  function getAll($tbl)  {
    echo "Working form getAll()";
    echo $tbl;

    // Give me acesss to my database through the connect script
    include("connect.php");
    $queryAll = "SELECT * FROM ($tbl)";
    //echo $queryAll;

    //This will query our database and return an object back to the variable 
    $runAll = mysqli_query($link, $queryAll);
    if(){
      return $runAll;
    }else {
      $error = "There was a problem with the frontend, totally not the backend devs fault";
      return $error;
    }
    mysqli_close($link);
  }

  /*function getSingle(){
    //SELECT * FROM tbl_marvel WHERE marvel_id = 2
    include('connect.php');
    $querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
    // echo $querySingle
    $runSingle = mysql_query($querySingle);
    if($runSingle){
      return $$runSingle;
    }else {
      $error = "Drom getSinlge()";
      return $error;
    }
    mysqli_close($link);
    
    

  }*/
?>