<?php
require_once("util-db.php");
require_once("model-teams-coaches.php");

$pageTitle = "Coaches with players";
include "view-header.php";
$teamsCoaches = selectTeamsWithCoaches();
include "view-teams-coaches.php";
include "view-footer.php";
?>
