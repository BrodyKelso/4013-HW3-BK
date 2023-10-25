<?php
require_once("util-db.php");
require_once("model-games.php");

$pageTitle = "Games";
include "view-header.php";

if (isset($_POST['actionType']))
{
    switch ($_POST['actionType'])
    {
        case "Add":
            if (insertGame($_POST['game_id'], $_POST['opponent_name'], $_POST['date'], $_POST['location'], $_POST['result'], $_POST['team_id']))
            {
                echo '<div class="alert alert-success" role="alert">Game added successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to add game.</div>';
            }
            break;

        case "Edit":
            if (updateGame($_POST['game_id'], $_POST['opponent_name'], $_POST['date'], $_POST['location'], $_POST['result'], $_POST['team_id']))
            {
                echo '<div class="alert alert-success" role="alert">Game updated successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to update game.</div>';
            }
            break;

        case "Delete":
            if (deleteGame($_POST['game_id']))
            {
                echo '<div class="alert alert-success" role="alert">Game deleted successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to delete game.</div>';
            }
            break;
    }
}

$games = selectGame();
include "view-games.php";
include "view-footer.php";
?>
