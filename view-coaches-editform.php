<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCoachesModal-<?php echo $coach['coach_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <!-- ... (rest of the SVG paths are unchanged) ... -->
    </svg>
    Edit
</button>

<!-- Modal structure -->
<div class="modal fade" id="editCoachesModal-<?php echo $coach['coach_id']; ?>" tabindex="-1" aria-labelledby="editCoachesModalLabel-<?php echo $coach['coach_id']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-xl"> <!-- Change to 'modal-xl' -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCoachesModalLabel-<?php echo $coach['coach_id']; ?>">Edit Coach</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-md-6 mb-3"> <!-- Using grid system for first column -->
                            <label for="ccoach_id-<?php echo $coach['coach_id']; ?>" class="form-label">Coach ID</label>
                            <input type="number" class="form-control" id="ccoach_id-<?php echo $coach['coach_id']; ?>" name="ccoach_id" value="<?php echo htmlspecialchars($coach['coach_id']); ?>">
                        </div>
                        <div class="col-md-6 mb-3"> <!-- Using grid system for second column -->
                            <label for="cfirst_name-<?php echo $coach['coach_id']; ?>" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="cfirst_name-<?php echo $coach['coach_id']; ?>" name="cfirst_name" value="<?php echo htmlspecialchars($coach['first_name']); ?>">
                        </div>
                    </div>

                    <!-- Similar grid structure continues for other input fields... -->

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="clast_name-<?php echo $coach['coach_id']; ?>" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="slast_name-<?php echo $coach['coach_id']; ?>" name="clast_name" value="<?php echo htmlspecialchars($coach['last_name']); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cposition-<?php echo $coach['coach_id']; ?>" class="form-label">Position</label>
                            <input type="text" class="form-control" id="cposition-<?php echo $coach['coach_id']; ?>" name="cposition" value="<?php echo htmlspecialchars($coach['position']); ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="cteam_id-<?php echo $coach['coach_id']; ?>" class="form-label">Team ID</label>
                            <input type="number" class="form-control" id="cteam_id-<?php echo $coach['coach_id']; ?>" name="cteam_id" value="<?php echo htmlspecialchars($coach['team_id']); ?>">
                        </div>
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
