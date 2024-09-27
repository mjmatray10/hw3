<?php
require_once("util-db.php");
require_once("model-programs-by-university.php");

$pageTitle = "Programs by University";
include "view-header.php";
$programs = selectProgramsByUniversity($_POST['uid']);
include "view-programs-by-university.php";
include "view-footer.php";
?>
