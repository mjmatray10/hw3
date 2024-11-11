<?php
require_once("util-db.php");
require_once("model-coaches-chart-db.php");

$pageTitle = "Coach Chart";
include "view-header.php";
$coaches = selectCoaches();
include "view-coaches-chart.php";
include "view-footer.php";
?>
