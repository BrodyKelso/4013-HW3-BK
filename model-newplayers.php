<?php
require_once("util-db.php");

function selectAllPlayers() {
    try {
        $conn = get_db_connection();
        $sql = "SELECT player_id, first_name, last_name, position, jersey_number, year, team_id FROM Players";

        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        // Execute the query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Close the connection
        $conn->close();

        // Return the result
        return $result;

    } catch (Exception $e) {
        // Handle exceptions here
        return false;
    }
}
