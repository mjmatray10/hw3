<h1>Coaches with Universities</h1>
<div class="card-group">
<?php
while ($coach = $coaches->fetch_assoc()) {
  ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $coach['coach_name']; ?></h5>
        <p class = "card-text">
        <ul class="list-group">
        
<?php
  $universities = selectCoachesByUniversity($coach['coach_id']);
  while ($university = $universities->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $university['university_name']; ?> - <?php echo $university['university_masot']; ?> - <?php echo $university['university_location']; ?></li>
<?php    
  }
?>
        </ul>
        </p>
        <p class="card-text"><small class="text-body-secondary">Current Team: <?php echo $coach['coach_team']; ?></small></p>
      </div>
    </div>
  <?php
}
?>
</div>
