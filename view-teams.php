<div class = "row">
  <div class = "col">
<h1>Teams</h1>
  </div>
  <div class = "col-auto">
    <?php
    include "view-teams-newform.php";
    ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Coach ID</th>
      <th>University ID</th>
      <th>Conference</th>
      <th>First Opponent</th>
      <th>Record</th>
      <th>Conference ID</th>
      <th></th>
      <th></th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $team['team_id']; ?></td>
    <td><?php echo $team['coach_id']; ?></td>
    <td><?php echo $team['university_id']; ?></td>
    <td><?php echo $team['conference']; ?></td>
    <td><?php echo $team['first_opponent']; ?></td>
    <td><?php echo $team['record']; ?></td>
    <td><?php echo $team['conference_id']; ?></td>
    <td>
      <?php
      include "view-teams-editform.php";
      ?>
    </td>
    <td>
       <form method="post", action="">
        <input type="hidden" name="tid" value="<?php echo $team['team_id']; ?>">
         <input type="hidden" name="actionType" value="Delete">
          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
              <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293z"/>
              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
            </svg>
          </button>
        </form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
