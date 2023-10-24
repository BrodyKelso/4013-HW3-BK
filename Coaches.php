<?php
require_once("util-db.php");
require_once("model-coaches.php");

$pageTitle = "Coaches";
include "view-header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['actionType'])) {
        switch ($_POST['actionType']) {
            case "Add":
                if (isset($_POST['first_name'], $_POST['last_name'], $_POST['position'], $_POST['team_id'])) {
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $position = $_POST['position'];
                    $team_id = $_POST['team_id'];

                    if (insertCoach($first_name, $last_name, $position, $team_id)) {
                        echo '<div class="alert alert-success" role="alert">Coach added.</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Coach not added.</div>';
                    }
                }
                break;

            case "Edit":
                if (isset($_POST['coach_id'], $_POST['first_name'], $_POST['last_name'], $_POST['position'], $_POST['team_id'])) {
                    $coach_id = $_POST['coach_id'];
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $position = $_POST['position'];
                    $team_id = $_POST['team_id'];

                    if (updateCoach($coach_id, $first_name, $last_name, $position, $team_id)) {
                        echo '<div class="alert alert-success" role="alert">Coach updated.</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Coach not updated.</div>';
                    }
                }
                break;

            case "Delete":
                if (isset($_POST['coach_id'])) {
                    $coach_id = $_POST['coach_id'];

                    if (deleteCoach($coach_id)) {
                        echo '<div class="alert alert-success" role="alert">Coach deleted.</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Coach not deleted.</div>';
                    }
                }
                break;
        }
    }
}

$coaches = selectCoaches();
include "view-coaches.php";
include "view-footer.php";
?>
