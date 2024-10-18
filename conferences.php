<?php
require_once("util-db.php");
require_once("model-conferences.php");

$pageTitle = "Conferences";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertConferences($_POST['conName'])) {
        echo '<div class="alert alert-success" role="alert">Conference Added</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateConferences($_POST['conName'], $_POST['conid'])) {
        echo '<div class="alert alert-success" role="alert">Conference Edited</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteCoaches($_POST['conid'])) {
        echo '<div class="alert alert-success" role="alert">Conference Deleted</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$coaches = selectConferences();
include "view-conferences.php";
include "view-footer.php";
?>
