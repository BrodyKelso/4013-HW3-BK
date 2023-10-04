<?php
require_once("util-db.php");

function selectAllGames() {
    try {
        // Get database connection
        $conn = get_db_connection();
        
        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("SELECT game_id, opponent_name, date, location, result, team_id FROM Games");
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();
        
        // Close the connection
        $conn->close();
        
        // Return the result
        return $result;

    } catch (Exception $e) {
        // Ensure connection is closed even if an exception is thrown
        if ($conn) {
            $conn->close();
        }

        // Re-throw exception to be handled upstream
        throw $e;
    }
}
?>
