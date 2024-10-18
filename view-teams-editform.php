<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTeamModal<?php echo $team['team_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editTeamModal<?php echo $team['team_id']; ?>" tabindex="-1" aria-labelledby="editTeamModalLabel<?php echo $team['team_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editTeamModalLabel<?php echo $team['team_id']; ?>">Edit Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="tcoachid<?php echo $team['team_id']; ?>" class="form-label">Coach ID</label>
            <input type="text" class="form-control" id="tcoachid<?php echo $team['team_id']; ?>" name = "tcoachid" value="<?php echo $team['coach_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="tuid<?php echo $team['team_id']; ?>" class="form-label">University ID</label>
            <input type="text" class="form-control" id="tuid<?php echo $team['team_id']; ?>" name = "tuid" value="<?php echo $team['university_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="tcon<?php echo $team['team_id']; ?>" class="form-label">Conference</label>
            <input type="text" class="form-control" id="tcon<?php echo $team['team_id']; ?>" name = "tcon" value="<?php echo $team['conference']; ?>">
          </div>
          <div class="mb-3">
            <label for="tFO<?php echo $team['team_id']; ?>" class="form-label">First Opponent</label>
            <input type="text" class="form-control" id="tFO<?php echo $team['team_id']; ?>" name = "tFO" value="<?php echo $team['first_opponent']; ?>">
          </div>
          <div class="mb-3">
            <label for="trec<?php echo $team['team_id']; ?>" class="form-label">Record</label>
            <input type="text" class="form-control" id="trec<?php echo $team['team_id']; ?>" name = "trec" value="<?php echo $team['record']; ?>">
          </div>
          <div class="mb-3">
            <label for="tconid<?php echo $team['team_id']; ?>" class="form-label">Conference ID</label>
            <input type="text" class="form-control" id="tconid<?php echo $team['team_id']; ?>" name = "tconid" value="<?php echo $team['conference_id']; ?>">
          </div>
            <input type="hidden" name = "tid" value="<?php echo $team['team_id']; ?>">
            <input type = "hidden" name = "actionType" value = "Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
