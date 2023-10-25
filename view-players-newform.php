<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlayersModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
    Add Player
</button>

<!-- Modal -->
<div class="modal fade" id="newPlayersModal" tabindex="-1" aria-labelledby="newPlayersModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newPlayersModalLabel">New Player</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="pplayer_id" class="form-label">Player ID</label>
                        <input type="number" class="form-control" id="pplayer_id" name="pplayer_id">
                    </div>
                    <div class="mb-3">
                        <label for="pfirst_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="pfirst_name" name="pfirst_name">
                    </div>
                    <div class="mb-3">
                        <label for="plast_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="plast_name" name="plast_name">
                    </div>
                    <div class="mb-3">
                        <label for="pposition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="pposition" name="pposition">
                    </div>
                    <div class="mb-3">
                        <label for="pjersey_number" class="form-label">Jersey Number</label>
                        <input type="number" class="form-control" id="pjersey_number" name="pjersey_number">
                    </div>
                    <div class="mb-3">
                        <label for="pyear" class="form-label">Year</label>
                        <input type="number" class="form-control" id="pyear" name="pyear">
                    </div>
                    <div class="mb-3">
                        <label for="pteam_id" class="form-label">Team ID</label>
                        <input type="number" class="form-control" id="pteam_id" name="pteam_id">
                    </div>
                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
