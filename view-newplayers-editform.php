<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPlayersModal-<?php echo $player['player_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
    </svg>
    Edit
</button>

<!-- Modal structure -->
<div class="modal fade" id="editPlayersModal-<?php echo $player['player_id']; ?>" tabindex="-1" aria-labelledby="editPlayersModalLabel-<?php echo $player['player_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPlayersModalLabel-<?php echo $player['player_id']; ?>">Edit Player</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="first_name-<?php echo $player['player_id']; ?>" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name-<?php echo $player['player_id']; ?>" name="first_name" value="<?php echo htmlspecialchars($player['first_name']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="last_name-<?php echo $player['player_id']; ?>" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name-<?php echo $player['player_id']; ?>" name="last_name" value="<?php echo htmlspecialchars($player['last_name']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="position-<?php echo $player['player_id']; ?>" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position-<?php echo $player['player_id']; ?>" name="position" value="<?php echo htmlspecialchars($player['position']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jersey_number-<?php echo $player['player_id']; ?>" class="form-label">Jersey Number</label>
                        <input type="number" class="form-control" id="jersey_number-<?php echo $player['player_id']; ?>" name="jersey_number" value="<?php echo htmlspecialchars($player['jersey_number']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="year-<?php echo $player['player_id']; ?>" class="form-label">Year</label>
                        <input type="number" class="form-control" id="year-<?php echo $player['player_id']; ?>" name="year" value="<?php echo htmlspecialchars($player['year']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="team_id-<?php echo $player['player_id']; ?>" class="form-label">Team ID</label>
                        <input type="number" class="form-control" id="team_id-<?php echo $player['player_id']; ?>" name="team_id" value="<?php echo htmlspecialchars($player['team_id']); ?>">
                    </div>
                    <input type="hidden" name="player_id" value="<?php echo htmlspecialchars($player['player_id']); ?>">
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
