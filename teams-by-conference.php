<?php
require_once("util-db.php");
require_once("model-teams-by-conference.php");
$pageTitle = "Teams by Conference";
include "view-header.php";
$conference_id = $_POST['conference_id'];
$teams = selectTeamsByConferenceId($conference_id);
include "view-teams-by-conference.php";
include "view-footer.php";
?>
