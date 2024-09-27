<h1>Coaches with Universities</h1>
<div class="card-group">
<?php
while ($coach = $coaches->fetch_assoc()) {
  ?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $coach['coach_name']; ?></h5>
      <p class="card-text">
<?php
  $universities = selectCoachesByUniversity($coach['coach_id']);
  while ($university = $universities->fetch_assoc()) {
?>
    
<?php    
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Current Team: <?php echo $coach['coach_team']; ?></small></p>
    </div>
  </div>
  <?php
}
?>
</div>
