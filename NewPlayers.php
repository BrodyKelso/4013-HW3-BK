<?php
require_once("util-db.php");
require_once("model-newplayers.php");

$pageTitle = "Players";
include "view-header.php";

if (isset($_POST['actionType']))
{
    switch ($_POST['actionType'])
    {
        case "Add":
            if (insertPlayer($_POST['first_name'], $_POST['last_name'], $_POST['position'], $_POST['jersey_number'], $_POST['year'], $_POST['team_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player added.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Player not added.</div>';
            }
            break;

        case "Edit":
            if (updatePlayer($_POST['first_name'], $_POST['last_name'], $_POST['position'], $_POST['jersey_number'], $_POST['year'], $_POST['team_id'], $_POST['player_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player updated.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Player not updated.</div>';
            }
            break;

        case "Delete":
            if (deletePlayer($_POST['player_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player deleted.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Player not deleted.</div>';
            }
            break;
    }
}

$players = selectPlayers();
include "view-newplayers.php";
include "view-footer.php";
?>
