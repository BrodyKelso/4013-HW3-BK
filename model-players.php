<?php
require_once("util-db.php");


function selectAllPlayers($positionFilter = null) {
    $conn = new mysqli('159.89.47.44', 'brodypke_hw3user', 'BrodyHomework', 'brodypke_hw3');
    
    $sql = "SELECT player_id, first_name, last_name, position, jersey_number, year FROM Players"; 
    
    if($positionFilter) {
        $positionFilter = mysqli_real_escape_string($conn, $positionFilter); 
        $sql .= " WHERE position = '$positionFilter'";
    }
    
    $result = mysqli_query($conn, $sql);
    
    return $result;
}


?>
