 <?php
        include "view-header.php";
    ?>
<div class = "row">
  <div class = "col">
<h1>JavaScript HW5</h1>
  </div>
  <div class = "col-auto">
  </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JavaScript HW5</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>
<body>
<div class="container text-center mt-4">
    <h1>Image Manipulation</h1>
    
    <img id="img1" src="ou.png" style="height:200px; width:auto;"/>
</br>
    
    <div class="btn-group mt-3" role="group">
        <button id="addbtn" class="btn btn-primary"><i class="bi bi-plus-square"></i></button>
        <button id="minusbtn" class="btn btn-danger"><i class="bi bi-dash-square"></i></button>
        <button id="rotatebtn" class="btn btn-warning"><i class="bi bi-arrow-clockwise"></i></button>
        <button id="opacitybtn" class="btn btn-info"><i class="bi bi-eye"></i></button>
        <button id="resetbtn" class="btn btn-secondary"><i class="bi bi-arrow-counterclockwise"></i></button>
    </div>
</div>

<script>
    "use strict";
    const image = document.querySelector("#img1");

    document.querySelector("#addbtn").addEventListener("click", () => {
        let img = document.querySelector("#img1");
        let currentWidth = img.clientWidth;
        img.style.width = (currentWidth + 10) + 'px';
    });

    document.querySelector("#minusbtn").addEventListener("click", () => {
       let img = document.querySelector("#img1");
       let currentWidth = img.clientWidth;
       if (currentWidth > 10) {
       img.style.width = (currentWidth - 10) + 'px'; }
    });

    let rotation = 0;
    document.querySelector("#rotatebtn").addEventListener("click", () => {
        rotation += 45;
        image.style.transform = `rotate(${rotation}deg)`;
    });

    let isOpaque = true;
    document.querySelector("#opacitybtn").addEventListener("click", () => {
        image.style.opacity = isOpaque ? 0.5 : 1;
        isOpaque = !isOpaque;
    });

    document.querySelector("#resetbtn").addEventListener("click", () => {
        let img = document.querySelector("#img1");
        img.style.width = '200px';
        rotation = 0;
        image.style.transform = "rotate(0deg)";
        image.style.opacity = 1;
        isOpaque = true;
    });
</script>

</body>
</html>

<?php
include "view-footer.php";
?>
