<?php
require_once("util-db.php");
require_once("model-players.php");
require_once("view-players.php");

$pageTitle = "Players";
include "view-header.php";

$positionFilter = isset($_POST['filterPosition']) ? $_POST['filterPosition'] : null;
$allPlayers = selectAllPlayers($positionFilter); // Modify selectAllPlayers() to accept filter

// Add this line for debugging
var_dump($allPlayers); 

include "view-players.php";
include "view-footer.php";
?>
