<?php
require_once("util-db.php");
require_once("model-teams-by-conference.php");
$pageTitle = "Teams by Conference";
include "view-header.php";
$teams = $_POST['cc_id'];
include "view-teams-by-conference.php";
include "view-footer.php";
?>
