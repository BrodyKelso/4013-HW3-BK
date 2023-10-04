<?php
require_once("util-db.php");
require_once("model-players.php");


$pageTitle = "Players";
include "view-header.php";

$positionFilter = isset($_POST['filterPosition']) ? $_POST['filterPosition'] : null;
$allPlayers = selectAllPlayers($positionFilter); // Modify selectAllPlayers() to accept filter

include "view-players.php";
include "view-footer.php";
?>
