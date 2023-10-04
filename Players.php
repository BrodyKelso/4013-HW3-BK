<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Players";
include "view-header.php";

$allPlayers = selectAllPlayers();

// Check if data was fetched
if($allPlayers && $allPlayers->num_rows > 0) {
    include "view-players.php";
} else {
    echo "<p>No players found.</p>";
}

include "view-footer.php";
?>
