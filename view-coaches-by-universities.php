<h1>Coaches by Universities</h1>
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
while ($university = $universities->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $university['university_id']; ?></td>
    <td><?php echo $university['university_location']; ?></td>
    <td><?php echo $university['university_mascot']; ?></td>
    <td><?php echo $university['university_name']; ?></td>
    <td><?php echo $university['conference']; ?></td>
    <td><?php echo $university['first_opponent']; ?></td>
    <td><?php echo $university['record']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
