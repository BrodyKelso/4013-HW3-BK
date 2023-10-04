<?php
require_once("util-db.php");
require_once("model-coaches-players.php");

$pageTitle = "Coaches with Players";
include "view-header.php";

$coach_id = $_GET['id'] ?? null;
$coach_position = $_GET['position'] ?? null;

if($coach_position === 'Head Coach') {
    $players = selectAllPlayers();
} elseif($coach_position !== null) {
    $players = selectPlayersByCoachPosition($coach_position);
} elseif($coach_id !== null) {
    $players = selectCoachesWithPlayers($coach_id);
} else {
    // Handle error: neither id nor position supplied.
    die("Error: No ID or Position supplied.");
}

include "view-players.php";
include "view-footer.php";
?>
