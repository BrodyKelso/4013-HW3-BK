<?php
require_once("util-db.php");

function selectAllPlayers($positionFilter = null) {
    global $conn; 
    
    $sql = "SELECT * FROM Players"; 
    
    if($positionFilter) {
        $positionFilter = mysqli_real_escape_string($conn, $positionFilter); 
        $sql .= " WHERE position = '$positionFilter'";
    }
    
    $result = mysqli_query($conn, $sql);
    
    return $result;
}

?>
