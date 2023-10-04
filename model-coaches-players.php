<?php
require_once("util-db.php");

function selectCoachesWithPlayers($coach_id){
    try {
        $conn = get_db_connection();
        
        $stmt = $conn->prepare("SELECT p.player_id, p.first_name, p.last_name, p.position, p.jersey_number, p.year
        FROM Players p
        WHERE p.team_id = (SELECT team_id FROM Coaches WHERE coach_id = ?)");
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

function selectAllPlayers() {
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

function selectPlayersByCoachPosition($coach_position) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.player_id, p.first_name, p.last_name, p.position, p.jersey_number, p.year
        FROM Players p
        WHERE p.team_id = (SELECT team_id FROM Coaches WHERE coach_id = ?)");
        $stmt->bind_param("s", $coach_position);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function getCoachPosition($coach_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT position FROM Coaches WHERE coach_id = ?");
        $stmt->bind_param("i", $coach_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $position = $row['position'];
            $conn->close();
            return $position;
        } else {
            $conn->close();
            return null; // Coach not found or position not specified
        }
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
