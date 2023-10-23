<?php
// Connect to your database
include 'util-db.php';

// Collect form data
$team_id = $_POST['team_id'];
$team_name = $_POST['team_name'];
$season_year = $_POST['season_year'];
$win = $_POST['win'];
$loss = $_POST['loss'];

// Update the database
$query = "UPDATE teams SET team_name = '$team_name', season_year = '$season_year', win = $win, loss = $loss WHERE team_id = $team_id";
$result = $conn->query($query);

// Redirect back to teams page
header("Location: view-teams.php");
exit;
?>
