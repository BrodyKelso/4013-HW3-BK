<?php
require_once("util-db.php");
require_once("model-players.php");
require_once("view-players.php");

$pageTitle = "Players";
include "view-header.php";

$allPlayers = selectAllPlayers();

if($allPlayers && $allPlayers->num_rows > 0) {
    display_players($allPlayers);
} else {
    echo "<p>No players found.</p>";
}

include "view-footer.php";
?>
