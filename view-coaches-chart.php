<h1>Coach Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
while ($coaches = $coaches->fetch_assoc()) {
  
}
?>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($coaches = $coaches->fetch_assoc()) {
  echo $coaches['num_unis'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$coaches = selectCoaches();
while ($coaches = $coaches->fetch_assoc()) {
  echo "'" . $coach['coach_name'] . "', ";
}
?>
    ]
},
  });
</script>
