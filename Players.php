<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Players";
include "view-header.php";
$players = selectAllPlayers();
include "view-players.php";
include "view-footer.php";
?>
