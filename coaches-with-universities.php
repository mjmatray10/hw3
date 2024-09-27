<?php
require_once("util-db.php");
require_once("model-coaches-with-universities.php");

$pageTitle = "Coaches with Universities";
include "view-header.php";
$coaches = selectCoaches();
include "view-coaches-with-universities.php";
include "view-footer.php";
?>
