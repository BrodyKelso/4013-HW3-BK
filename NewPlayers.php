<?php
require_once("util-db.php");
require_once("model-players.php");
require_once("view-players.php");

$pageTitle = "Players";
include "view-header.php";


$allPlayers = selectAllPlayers1($positionFilter); // Modify selectAllPlayers() to accept filter

include "view-players.php";
include "view-footer.php";
?>