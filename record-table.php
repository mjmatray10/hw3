<?php
require_once("util-db.php");
require_once("model-record-table-db.php");

$pageTitle = "University Record Table";
include "view-header.php";
$results = selectUniversityRecords();
include "view-record-table.php";
include "view-footer.php";
?>
