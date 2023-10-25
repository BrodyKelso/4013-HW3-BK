<?php
require_once("util-db.php");
require_once("model-newplayers.php");
require_once("view-newplayers.php");

$pageTitle = "Players";
include "view-header.php";


$allPlayers = selectAllPlayers(); // Modify selectAllPlayers() to accept filter

include "view-players.php";
include "view-footer.php";
?>