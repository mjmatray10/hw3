<?php
require_once("util-db.php");
require_once("model-universities.php");

$pageTitle = "Universities";
include "view-header.php";
$universities = selectUniversities();
include "view-universities.php";
include "view-footer.php";
?>
