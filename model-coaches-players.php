<?php
function selectCoachesWithPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT Coaches.first_name AS coach_first_name, 
                   Coaches.last_name AS coach_last_name, 
                   Players.first_name AS player_first_name, 
                   Players.last_name AS player_last_name 
            FROM Coaches
            JOIN Teams ON Coaches.team_id = Teams.team_id
            JOIN Players ON Teams.team_id = Players.team_id
        ");
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
