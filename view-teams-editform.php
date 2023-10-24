<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTeamsModal-<?php echo $team['team_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
    </svg>
    Edit
</button>

<!-- Modal structure -->
<div class="modal fade" id="editTeamsModal-<?php echo $team['team_id']; ?>" tabindex="-1" aria-labelledby="editTeamsModalLabel-<?php echo $team['team_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTeamsModalLabel-<?php echo $team['team_id']; ?>">Edit Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="tName-<?php echo $team['team_id']; ?>" class="form-label">Team Name</label>
                        <input type="text" class="form-control" id="tName-<?php echo $team['team_id']; ?>" name="tName" value="<?php echo htmlspecialchars($team['team_name']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tSeasonYear-<?php echo $team['team_id']; ?>" class="form-label">Season Year</label>
                        <input type="number" class="form-control" id="tSeasonYear-<?php echo $team['team_id']; ?>" name="tSeasonYear" value="<?php echo htmlspecialchars($team['season_year']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tWins-<?php echo $team['team_id']; ?>" class="form-label">Wins</label>
                        <input type="number" class="form-control" id="tWins-<?php echo $team['team_id']; ?>" name="tWins" value="<?php echo htmlspecialchars($team['win']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tLosses-<?php echo $team['team_id']; ?>" class="form-label">Losses</label>
                        <input type="number" class="form-control" id="tLosses-<?php echo $team['team_id']; ?>" name="tLosses" value="<?php echo htmlspecialchars($team['loss']); ?>">
                    </div>
                    <input type="hidden" name="team_id" value="<?php echo htmlspecialchars($team['team_id']); ?>">
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