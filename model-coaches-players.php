<?php
function selectCoachesWithPlayers($coach_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT Coaches.first_name AS coach_first_name, 
                   Coaches.last_name AS coach_last_name, 
                   Players.first_name AS player_first_name, 
                   Players.last_name AS player_last_name, 
                   Players.position AS player_position,
                   Players.jersey_number AS jersey_number,
                   Players.year AS player_year
            FROM Coaches
            JOIN Players ON Coaches.coach_id = Players.team_id
            WHERE Coaches.coach_id = ?
            ORDER BY Players.player_id
        ");
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
