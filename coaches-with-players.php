<?php
require_once("util-db.php");
require_once("model-coaches-players.php");

$pageTitle = "Coaches with Players";
include "view-header.php";

// Ensure that an ID is provided and is a number
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $coach_id = $_GET['id'];
    
    // Debugging: Check the value of $coach_id
    echo "Coach ID: " . $coach_id . "<br>";

    $coachesPlayers = selectCoachesWithPlayers($coach_id);

    // Debugging: Check if $coachesPlayers is null or has rows
    if ($coachesPlayers === null) {
        echo "Coaches Players result is null!";
    } elseif ($coachesPlayers->num_rows === 0) {
        echo "No rows found in Coaches Players result!";
    } else {
        include "view-players.php";
    }
} else {
    echo "<p>Invalid coach ID.</p>";
}

include "view-footer.php";
?>
