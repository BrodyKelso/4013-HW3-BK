<?php
require_once("util-db.php");

function selectAllGames() {
    global $dbConnection; // assuming you have a $dbConnection in util-db.php

    $query = "SELECT * FROM Games"; // adjust this SQL according to your table and fields
    $result = $dbConnection->query($query);

    return $result;
}
?>
