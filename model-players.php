<?php
require_once("util-db.php");


function selectAllPlayers1($positionFilter = null) {
    try {
        $conn = get_db_connection();
        $sql = "SELECT player_id, first_name, last_name, position, jersey_number, year FROM Players";

        // If a position filter is provided, add it to the SQL query
        if ($positionFilter) {
            $sql .= " WHERE position = ?";
        }

        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        // Bind the parameter if a position filter is provided
        if ($positionFilter) {
            $stmt->bind_param("s", $positionFilter);
        }

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

