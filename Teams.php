<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

if (isset($_POST['actionType']))
{
    switch ($_POST['actionType'])
    {
        case "Add":
            if (insertTeams($_POST['tName'], $_POST['tSeasonYear'], $_POST['tWins'], $_POST['tLosses']))
            {
                echo '<div class="alert alert-success" role="alert">Team added.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Team not added.</div>';
            }
            break;

        case "Edit":
          
            if (updateTeams($_POST['team_id'], $_POST['tName'], $_POST['tSeasonYear'], $_POST['tWins'], $_POST['tLosses']))
            {
                echo '<div class="alert alert-success" role="alert">Team updated.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Team not updated.</div>';
            }
            break;

        case "Delete":
           
            if (deleteTeams($_POST['team_id']))
            {
                echo '<div class="alert alert-success" role="alert">Team deleted.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Team not deleted.</div>';
            }
            break;
    }
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
