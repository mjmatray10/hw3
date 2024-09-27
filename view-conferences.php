<h1>Conferences</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Conference</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
$allConferences = selectConferences();
while ($conference = $allConferences->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $conference['conference_id']; ?></td>
    <td><?php echo $conference['conference']; ?></td>
    <td>
        <form method="post" action="teams-by-conference.php">
    <input type="hidden" name="conference_id" value="<?php echo $conference['conference_id']; ?>">
    <button type="submit" class="btn btn-primary">Teams</button>
</form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
