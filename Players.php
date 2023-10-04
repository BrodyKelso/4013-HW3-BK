<?php
require_once("util-db.php");
require_once("model-players.php");
require_once("view-players.php");

$pageTitle = "Players";
include "view-header.php";

$positionFilter = isset($_POST['filterPosition']) ? $_POST['filterPosition'] : null;
$allPlayers = selectAllPlayers1($positionFilter); // Modify selectAllPlayers() to accept filter

if ($allPlayers !== null && $allPlayers->num_rows > 0) {
    include "view-players.php";
} else {
    echo "No player data available."; // Display a message when there's no data.
}

include "view-footer.php";
?>
