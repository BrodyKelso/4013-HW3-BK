<?php
function get_db_connection(){
   
    $conn = new mysqli('159.89.47.44', 'brodypke_hw3user', 'BrodyHomework', 'brodypke_hw3);
    
    
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
