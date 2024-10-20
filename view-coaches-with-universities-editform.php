<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProgramModal<?php echo $university['university_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editProgramModal<?php echo $university['university_id']; ?>" tabindex="-1" aria-labelledby="editProgramModalLabel<?php echo $university['university_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editProgramModalLabel<?php echo $university['university_id']; ?>">Edit Program</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="loc<?php echo $university['university_id']; ?>" class="form-label">Program Location</label>
            <input type="text" class="form-control" id="loc<?php echo $university['university_id']; ?>" name = "loc" value="<?php echo $university['university_location']; ?>">
          </div>
          <div class="mb-3">
            <label for="mas<?php echo $university['university_id']; ?>" class="form-label">Program Mascot</label>
            <input type="text" class="form-control" id="mas<?php echo $university['university_id']; ?>" name = "mas" value="<?php echo $university['university_mascot']; ?>">
          </div>
          <div class="mb-3">
            <label for="nam<?php echo $university['university_id']; ?>" class="form-label">Program Name</label>
            <input type="text" class="form-control" id="nam<?php echo $university['university_id']; ?>" name = "nam" value="<?php echo $university['university_name']; ?>">
          </div>
          <div class="mb-3">
            <label for="cid<?php echo $university['university_id']; ?>" class="form-label">Coach ID</label>
            <input type="text" class="form-control" id="cid<?php echo $university['university_id']; ?>" name = "cid" value="<?php echo $university['coach_id']; ?>">
          </div>
            <input type="hidden" name = "uid" value="<?php echo $university['university_id']; ?>">
            <input type = "hidden" name = "actionType" value = "Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
