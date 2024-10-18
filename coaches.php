<?php
require_once("util-db.php");
require_once("model-coaches.php");

$pageTitle = "Coaches";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertCoaches($_POST['cName'], $_POST['cTeam'])) {
        echo '<div class="alert alert-success" role="alert">Coach Added</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateCoaches($_POST['cName'], $_POST['cTeam'], $_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Coach Edited</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteCoaches($_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Coach Deleted</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$coaches = selectCoaches();
include "view-coaches.php";
include "view-footer.php";
?>
