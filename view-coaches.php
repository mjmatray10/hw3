<h1>Coaches</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Team</th>
      <th></th>
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
    <td><a href = "universities-by-coaches.php?id=<?php echo $coach['coach_id']; ?>">Universities</a></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
