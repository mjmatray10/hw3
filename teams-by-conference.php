<?php
require_once("util-db.php");
require_once("model-teams-by-conference.php");
if (!isset($_POST['conference_id']) || empty($_POST['conference_id'])) {
    die("Error: Conference ID is not set or is empty.");
}
$conference_id = intval($_POST['conference_id']);
$teams = selectTeamsByConferenceId($conference_id);

$pageTitle = "Teams by Conference";
include "view-header.php";
include "view-teams-by-conference.php";
include "view-footer.php";
?>
