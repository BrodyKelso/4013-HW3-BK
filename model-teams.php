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

function insertTeams($team_name, $season_year, $win, $loss) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Teams` (`team_name`, `season_year`, `win`, `loss`) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("ssss", $team_name, $season_year, $win, $loss);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeams($team_name, $season_year, $win, $loss, $team_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Teams` SET `team_name` = ?, `season_year` = ?, `win` = ?, `loss` = ? WHERE `team_id` = ?;");
        $stmt->bind_param("siisi", $team_name, $season_year, $win, $loss, $team_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteTeams($team_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Teams` WHERE `team_id` = ?;");
        $stmt->bind_param("i", $team_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
