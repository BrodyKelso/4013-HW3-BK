<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Players";
include "view-header.php";

if (isset($_POST['actionType']))
{
    switch ($_POST['actionType'])
    {
        case "Add":
            if (insertPlayer($_POST['pplayer_id'], $_POST['pfirst_name'], $_POST['plast_name'], $_POST['pposition'], $_POST['pjersey_number'], $_POST['pyear'], $_POST['pteam_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player successfully added.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to add player.</div>';
            }
            break;

        case "Edit":
            if (updatePlayer($_POST['pplayer_id'], $_POST['pfirst_name'], $_POST['plast_name'], $_POST['pposition'], $_POST['pjersey_number'], $_POST['pyear'], $_POST['pteam_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player successfully updated.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to update player.</div>';
            }
            break;

        case "Delete":
            if (deletePlayer($_POST['pplayer_id']))
            {
                echo '<div class="alert alert-success" role="alert">Player successfully deleted.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to delete player.</div>';
            }
            break;
    }
}

$players = selectPlayer();
include "view-players.php";
include "view-footer.php";
?>
