<?php
// Connect to your database
include 'util-db.php';

// Collect form data
$team_name = $_POST['team_name'];
$season_year = $_POST['season_year'];
$win = $_POST['win'];
$loss = $_POST['loss'];

// Insert into the database
$query = "INSERT INTO teams (team_name, season_year, win, loss) VALUES ('$team_name', '$season_year', $win, $loss)";
$result = $conn->query($query);

// Redirect back to teams page
header("Location: view-teams.php");
exit;
?>
