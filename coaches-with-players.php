<?php
require_once("util-db.php");
require_once("model-coaches-players.php");

$pageTitle = "Coaches with Players";
include "view-header.php";

// Ensure that an ID is provided and is a number
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $coach_id = $_GET['id'];

    $coachesPlayers = selectCoachesWithPlayers($coach_id);

    if ($coachesPlayers && $coachesPlayers->num_rows > 0) {
        include "view-coaches-players-players.php"; // Include the view for displaying players
    } else {
        echo "<p>No players found for this coach.</p>";
    }
} else {
    echo "<p>Invalid coach ID.</p>";
}

include "view-footer.php";
?>
