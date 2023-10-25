<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCoachesModal-<?php echo $coach['coach_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
    </svg>
    Edit
</button>

<!-- Modal structure -->
<div class="modal fade" id="editCoachesModal-<?php echo $coach['coach_id']; ?>" tabindex="-1" aria-labelledby="editCoachesModalLabel-<?php echo $coach['coach_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCoachesModalLabel-<?php echo $coach['coach_id']; ?>">Edit Coach</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="ccoach_id-<?php echo $coach['coach_id']; ?>" class="form-label">Coach ID</label>
                        <input type="number" class="form-control" id="ccoach_id-<?php echo $coach['coach_id']; ?>" name="cCoachId" value="<?php echo htmlspecialchars($coach['coach_id']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cfirst_name-<?php echo $coach['coach_id']; ?>" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="cfirst_name-<?php echo $coach['coach_id']; ?>" name="cFirstName" value="<?php echo htmlspecialchars($coach['first_name']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="clast_name-<?php echo $coach['coach_id']; ?>" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="slast_name-<?php echo $coach['coach_id']; ?>" name="cLastName" value="<?php echo htmlspecialchars($coach['last_name']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cposition-<?php echo $coach['coach_id']; ?>" class="form-label">Position</label>
                        <input type="text" class="form-control" id="cposition-<?php echo $coach['coach_id']; ?>" name="cPosition" value="<?php echo htmlspecialchars($coach['position']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cteam_id-<?php echo $coach['coach_id']; ?>" class="form-label">Team ID</label>
                        <input type="number" class="form-control" id="cteam_id-<?php echo $coach['coach_id']; ?>" name="cTeamId" value="<?php echo htmlspecialchars($coach['team_id']); ?>">
                    </div>
                    <input type="hidden" name="actionType" value="Edit">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
