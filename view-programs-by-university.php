<h1>Programs by University</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Location</th>
      <th>Mascot</th>
      <th>Name</th>
      <th>Conference</th>
      <th>First Opponent</th>
      <th>Record</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($program = $programs->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $program['university_id']; ?></td>
    <td><?php echo $program['university_location']; ?></td>
    <td><?php echo $program['university_mascot']; ?></td>
    <td><?php echo $program['university_name']; ?></td>
    <td><?php echo $program['conference']; ?></td>
    <td><?php echo $program['first_opponent']; ?></td>
    <td><?php echo $program['record']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
