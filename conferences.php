<?php
require_once("util-db.php");
require_once("model-conferences.php");

$pageTitle = "Conferences";
include "view-header.php";
$coaches = selectConferences();
include "view-conferences.php";
include "view-footer.php";
?>
