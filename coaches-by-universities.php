<?php
require_once("util-db.php");
require_once("model-coaches-by-universities.php");

$pageTitle = "Coach From Universities";
include "view-header.php";
$universities = selectCoachesByUniversities($_GET['id']);
include "view-coaches-by-universities.php";
include "view-footer.php";
?>
