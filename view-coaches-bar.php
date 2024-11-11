<h1>Coach Bar Chart</h1>
<div id="myChart" class="ct-chart ct-major-twelfth"></div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chartist/dist/chartist.min.css">
<script src="https://cdn.jsdelivr.net/npm/chartist/dist/chartist.min.js"></script>

<script>
const coachData = [
<?php
$coaches = selectCoaches();
$data = [];
$labels = [];
while ($coach = $coaches->fetch_assoc()) {
  $data[] = $coach['num_unis'];
  $labels[] = "'" . $coach['coach_name'] . "'";
}
echo implode(", ", $data);
?>
];

const coachLabels = [
<?php echo implode(", ", $labels); ?>
];

new Chartist.Bar('#myChart', {
  labels: coachLabels,
  series: [coachData]
}, {
  axisY: {
    onlyInteger: true,
    offset: 20
  },
  seriesBarDistance: 10,
  height: '300px'
});
</script>
