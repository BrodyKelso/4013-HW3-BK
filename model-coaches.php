<?php
function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, first_name, last_name, position FROM Coaches");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCoach($first_name, $last_name, $position, $team_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Coaches` (first_name, last_name, position, team_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $first_name, $last_name, $position, $team_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCoach($coach_id, $first_name, $last_name, $position, $team_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Coaches` SET first_name = ?, last_name = ?, position = ?, team_id = ? WHERE coach_id = ?");
        $stmt->bind_param("sssii", $first_name, $last_name, $position, $team_id, $coach_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCoach($coach_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Coaches` WHERE coach_id = ?");
        $stmt->bind_param("i", $coach_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
