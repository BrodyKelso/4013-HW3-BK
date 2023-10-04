<?php
require_once("util-db.php");
require_once("model-players.php");
require_once("view-players.php");

$pageTitle = "Players";
include "view-header.php";

$positionFilter = isset($_POST['filterPosition']) ? $_POST['filterPosition'] : null;

// Debugging: Output the value of $positionFilter
echo "Filter position: " . $positionFilter;

$allPlayers = selectAllPlayers($positionFilter); // Modify selectAllPlayers() to accept filter

if ($allPlayers) {
    // Debugging: Output the count of retrieved players
    echo "Number of players retrieved: " . $allPlayers->num_rows;
} else {
    // Debugging: Output an error message if $allPlayers is not populated
    echo "Player data is not available.";
}

include "view-players.php";
include "view-footer.php";
?>
