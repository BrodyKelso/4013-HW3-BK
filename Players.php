<?php
require_once("util-db.php");
require_once("model-players.php");
require_once("model-coaches-players.php"); // Include the coaches-players functions
require_once("view-players.php");

$pageTitle = "Players";
include "view-header.php";

$allPlayers = selectAllPlayers();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $coach_id = $_GET['id'];
    $coach_position = getCoachPosition($coach_id);

    if ($coach_position !== null) {
        $coachedPlayers = selectPlayersByCoachPosition($coach_position);

        if ($coachedPlayers && $coachedPlayers->num_rows > 0) {
            display_players($coachedPlayers);
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
