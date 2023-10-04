<?php
require_once("util-db.php");
require_once("model-players.php");
require_once("view-players.php");

$pageTitle = "Players";
include "view-header.php";

// Handle the filter here
$positionFilter = isset($_POST['filterPosition']) ? $_POST['filterPosition'] : null;
$allPlayers = selectAllPlayers($positionFilter);

include "view-players.php";
include "view-footer.php";
?>
