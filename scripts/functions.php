<?php

//Backend redirect - Special case
// We use this to a page redirect with php

function redirect_to($location) {
  if($location != NULL){
    header("Location: {$location}");
    exit;
  }

}





?>