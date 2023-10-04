<?php
require_once("util-db.php");
require_once("model-coaches-players.php"); // Include the coaches-players functions

$pageTitle = "Coaches with Players";
include "view-header.php";

// Ensure that an ID is provided and is a number
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $coach_id = $_GET['id'];
    $coach_position = getCoachPosition($coach_id);

    if ($coach_position !== null) {
        $coachedPlayers = selectPlayersByCoachPosition($coach_position);

        // Check if data was fetched
        if ($coachedPlayers && $coachedPlayers->num_rows > 0) {
            include "view-players.php";
        } else {
            echo "<p>No players found for this coach.</p>";
        }
    } else {
        echo "<p>Invalid coach ID or coach position not specified.</p>";
    }
} else {
    echo "<p>Invalid coach ID.</p>";
}

include "view-footer.php";
?>
