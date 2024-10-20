<?php
require_once("util-db.php");
require_once("model-coaches-with-universities.php");

$pageTitle = "Coaches with Universities";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertProgram($_POST['loc'], $_POST['mas'], $_POST['nam'], $_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Program Added</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateProgram($_POST['loc'], $_POST['mas'], $_POST['nam'], $_POST['cid'], $_POST['uid'])) {
        echo '<div class="alert alert-success" role="alert">Program Edited</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteProgram($_POST['uid'])) {
        echo '<div class="alert alert-success" role="alert">Program Deleted</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$coaches = selectCoaches();
include "view-coaches-with-universities.php";
include "view-footer.php";
?>
