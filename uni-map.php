<?php
require_once("util-db.php");
require_once("model-uni-map-db.php");

$pageTitle = "University Map";
include "view-header.php";
$universities = selectUniversityLocations();
include "view-uni-map.php";
include "view-footer.php";
?>
