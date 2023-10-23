<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name,season_year, win, loss FROM Teams");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name,season_year, win, loss FROM Teams");
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
