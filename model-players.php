<?php
require_once("util-db.php");

function selectAllPlayers(){
    try {
        $conn = get_db_connection();
        
        $stmt = $conn->prepare("SELECT * FROM Players");
        $stmt->execute();
        
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
