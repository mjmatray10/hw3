<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertTeams($_POST['tcoachid'], $_POST['tuid'], $_POST['tcon'], $_POST['tFO'], $_POST['trec'], $_POST['tconid'])) {
        echo '<div class="alert alert-success" role="alert">Team Added</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateTeams($_POST['tcoachid'], $_POST['tuid'], $_POST['tcon'],$_POST['tFO'], $_POST['trec'], $_POST['tconid'], $_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team Edited</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteTeams($_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team Deleted</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
