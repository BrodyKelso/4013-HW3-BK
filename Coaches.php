<?php
require_once("util-db.php");
require_once("model-coaches.php");

$pageTitle = "Coaches";
include "view-header.php";

if (isset($_POST['actionType']))
{
    switch ($_POST['actionType'])
    {
        case "Add":
            if (insertCoach($_POST['ccoach_id'],$_POST['cfirst_name'], $_POST['clast_name'], $_POST['cposition'], $_POST['cteam_id']))
            {
                echo '<div class="alert alert-success" role="alert">Coach added.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Coach not added.</div>';
            }
            break;

        case "Edit":
            if (updateCoach($_POST['ccoach_id'], $_POST['cfirst_name'], $_POST['clast_name'], $_POST['cposition'], $_POST['cteam_id']))
            {
                echo '<div class="alert alert-success" role="alert">Coach updated.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Coach not updated.</div>';
            }
            break;

        case "Delete":
            if (deleteCoach($_POST['ccoach_id']))
            {
                echo '<div class="alert alert-success" role="alert">Coach deleted.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Coach not deleted.</div>';
            }
            break;
    }
}

$coaches = selectCoaches();
include "view-coaches.php";
include "view-footer.php";
?>
