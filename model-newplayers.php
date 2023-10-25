<?php

function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, first_name, last_name, position, jersey_number, year, team_id FROM Players");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayer($first_name, $last_name, $position, $jersey_number, $year, $team_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Players` (`first_name`, `last_name`, `position`, `jersey_number`, `year`, `team_id`) VALUES (?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("sssisi", $first_name, $last_name, $position, $jersey_number, $year, $team_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updatePlayer($first_name, $last_name, $position, $jersey_number, $year, $team_id, $player_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Players` SET `first_name` = ?, `last_name` = ?, `position` = ?, `jersey_number` = ?, `year` = ?, `team_id` = ? WHERE `player_id` = ?;");
        $stmt->bind_param("sssiisi", $first_name, $last_name, $position, $jersey_number, $year, $team_id, $player_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayer($player_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Players` WHERE `player_id` = ?;");
        $stmt->bind_param("i", $player_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
