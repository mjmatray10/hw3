<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTeamModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
      <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
      <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5M8.5 6.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5a.5.5 0 0 1 1 0"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newTeamModal" tabindex="-1" aria-labelledby="newTeamModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newTeamModalLabel">New Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="tcoachid" class="form-label">Coach ID</label>
            <input type="text" class="form-control" id="cName" name = "cName">
          </div>
          <div class="mb-3">
            <label for="tuid" class="form-label">University ID</label>
            <input type="text" class="form-control" id="cName" name = "cName">
          </div>
          <div class="mb-3">
            <label for="tcon" class="form-label">Conference</label>
            <input type="text" class="form-control" id="tcon" name = "tcon">
          </div>
          <div class="mb-3">
            <label for="tFO" class="form-label">First Opponent</label>
            <input type="text" class="form-control" id="tFO" name = "tFO">
          </div>
          <div class="mb-3">
            <label for="trec" class="form-label">Record</label>
            <input type="text" class="form-control" id="trec" name = "trec">
          </div>
          <div class="mb-3">
            <label for="tconid" class="form-label">Conference ID</label>
            <input type="text" class="form-control" id="tconid" name = "tconid">
          </div>
            <input type = "hidden" name = "actionType" value = "Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
