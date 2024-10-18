<?php
require_once("util-db.php");
require_once("model-universities.php");

$pageTitle = "Universities";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertUniversities($_POST['uLoc'], $_POST['uMas'], $_POST['uName'])) {
        echo '<div class="alert alert-success" role="alert">University Added</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$universities = selectUniversities();
include "view-universities.php";
include "view-footer.php";
?>
