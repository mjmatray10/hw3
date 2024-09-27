<h1>Teams in Conference</h1>
<div class="card-group">
<?php
$allConferences = selectConferences();
while ($conference = $allConferences->fetch_assoc()) {
?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $conference['conference']; ?></h5>
        <p class="card-text">
        <ul class="list-group">
<?php
  $teams = selectTeamsByConference($conference['conference']);
  while ($team = $teams->fetch_assoc()) {
?>
    <li class="list-group-item">
      <?php echo $team['university_id']; ?> - <?php echo $team['university_name']; ?>
    </li>
<?php    
  }
?>
        </ul>
        </p>
      </div>
    </div>
<?php
}
?>
</div>
