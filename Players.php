<?php
require_once("util-db.php");
require_once("model-players.php");
require_once("model-coaches-players.php"); // Include the coaches-players functions
require_once("view-players.php");

$pageTitle = "Players";
include "view-header.php";

$allPlayers = selectAllPlayers();

$coachesPlayers = selectCoachesWithPlayers($_GET['id']); // Call the selectCoachesWithPlayers function

if ($allPlayers && $allPlayers->num_rows > 0) {
    display_players($allPlayers);
} else {
    echo "<p>No players found.</p>";
}

include "view-footer.php";
?>
