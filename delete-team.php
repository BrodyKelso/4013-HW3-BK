<?php
// Connect to your database
include 'util-db.php';

// Collect id from URL
$team_id = $_GET['id'];

// Delete from the database
$query = "DELETE FROM teams WHERE team_id = $team_id";
$result = $conn->query($query);

// Redirect back to teams page
header("Location: view-teams.php");
exit;
?>
