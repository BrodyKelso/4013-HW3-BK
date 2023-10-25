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
            if (insertPlayer($_POST['player_id'], $_POST['first_name'], $_POST['last_name'], $_POST['position'], $_POST['jersey_number'], $_POST['year'], $_POST['team_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player added successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to add player.</div>';
            }
            break;

        case "Edit":
            if (updatePlayer($_POST['player_id'], $_POST['first_name'], $_POST['last_name'], $_POST['position'], $_POST['jersey_number'], $_POST['year'], $_POST['team_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player updated successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to update player.</div>';
            }
            break;

        case "Delete":
            if (deletePlayer($_POST['player_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player deleted successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to delete player.</div>';
            }
            break;
    }
}

$allPlayers = selectAllPlayer();
include "view-players.php";
include "view-footer.php";
?>
