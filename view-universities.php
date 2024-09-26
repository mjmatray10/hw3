<h1>Universities</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Location</th>
      <th>Mascot</th>
      <th>Name</th>
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
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
