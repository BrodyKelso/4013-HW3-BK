<?php
require_once("util-db.php");

function selectGame() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT game_id, opponent_name, date, location, result, team_id FROM Games");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertGame($game_id, $opponent_name, $date, $location, $result, $team_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Games` (`game_id`, `opponent_name`, `date`, `location`, `result`, `team_id`) VALUES (?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("issssi", $game_id, $opponent_name, $date, $location, $result, $team_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateGame($game_id, $opponent_name, $date, $location, $result, $team_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Games` SET `opponent_name` = ?, `date` = ?, `location` = ?, `result` = ?, `team_id` = ? WHERE `game_id` = ?;");
        $stmt->bind_param("sssisi", $opponent_name, $date, $location, $result, $team_id, $game_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGame($game_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Games` WHERE `game_id` = ?;");
        $stmt->bind_param("i", $game_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
