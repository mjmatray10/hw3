<h1>Coaches</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Team</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($coach = $coaches->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $coach['coach_id']; ?></td>
    <td><?php echo $coach['coach_name']; ?></td>
    <td><?php echo $coach['coach_team']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
