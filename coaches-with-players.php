<?php
require_once("util-db.php");
require_once("model-coaches-players.php");

$pageTitle = "Coaches with Players";
include "view-header.php";
$coachesPlayers = selectCoachesWithPlayers();
include "view-coaches-players.php";
include "view-footer.php";
?>
