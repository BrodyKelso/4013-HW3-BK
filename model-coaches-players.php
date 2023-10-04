<?php
require_once("util-db.php");

function selectCoachesWithPlayers($coach_id){
    try {
        $conn = get_db_connection();
        
        $stmt = $conn->prepare("SELECT p.* FROM Players p 
                                JOIN Coaches c ON c.coach_id = ?
                                JOIN PositionMapping pm ON c.position = pm.coach_position
                                WHERE p.position = pm.player_position");
        $stmt->bind_param("i", $coach_id); 
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
