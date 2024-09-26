<?php
require_once("util-db.php");
require_once("model-universities.php");

$pageTitle = "Coaches";
include "view-header.php";
$coaches = selectUniversities();
include "view-universities.php";
include "view-footer.php";
?>
