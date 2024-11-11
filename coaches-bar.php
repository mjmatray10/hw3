<?php
require_once("util-db.php");
require_once("model-coaches-bar-db.php");

$pageTitle = "Coach Bar Chart";
include "view-header.php";
$coaches = selectCoaches();
include "view-coaches-bar.php";
include "view-footer.php";
?>
