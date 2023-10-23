<h1>Teams</h1>

<!-- Add Team Button -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addTeamModal">Add Team</button>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>TeamName</th>
        <th>SeasonYear</th>
        <th>Wins</th>
        <th>Losses</th>
        <th>Actions</th> <!-- New Column for actions -->
      </tr>
    </thead> 
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
?>
      <tr>
        <td><?php echo $team['team_id']; ?></td>
        <td><?php echo $team['team_name']; ?></td>
        <td><?php echo $team['season_year']; ?></td>
        <td><?php echo $team['win']; ?></td>  
        <td><?php echo $team['loss']; ?></td>  
        <td>
            <!-- Edit and Delete buttons -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editTeamModal" data-id="<?php echo $team['team_id']; ?>">Edit</button>
            <a href="deleteTeam.php?id=<?php echo $team['team_id']; ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

<!-- Add Team Modal -->
<div class="modal fade" id="addTeamModal" tabindex="-1" aria-labelledby="addTeamModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTeamModalLabel">Add Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="addTeam.php" method="POST">
                <div class="modal-body">
                    <!-- Fields for the team -->
                    <div class="mb-3">
                        <label for="team_name" class="form-label">Team Name</label>
                        <input type="text" class="form-control" id="team_name" name="team_name">
                    </div>
                    <div class="mb-3">
                        <label for="season_year" class="form-label">Season Year</label>
                        <input type="number" class="form-control" id="season_year" name="season_year">
                    </div>
                    <!-- Other fields go here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Team</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Team Modal (similar to Add Team Modal but would need an extra input to store the ID of the team to edit) -->
<!-- ... -->

<script>
    // JavaScript to handle opening the Edit Modal with data of the specific team
    // This script will get the data-id of the button clicked and use it to fetch team data and populate the edit form
    // This is a simple example. In a full-fledged app, you'd likely use AJAX to fetch the specific team data based on its ID
    var editTeamModal = document.getElementById('editTeamModal');
    editTeamModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        // Extract the team ID from the data-id attribute
        var teamId = button.getAttribute('data-id');
        
        // You can now use the teamId to fetch data for this team and populate the modal's form inputs
    });
</script>
