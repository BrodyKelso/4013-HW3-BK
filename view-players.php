<h1>Players</h1>
<form method="POST" action="Players.php" class="mb-3">
    <label for="filterPosition" class="form-label">Filter by Position</label>
    <select name="filterPosition" id="filterPosition" class="form-select" onchange="this.form.submit()">
        <option value="">--Select Position--</option>
        <option value="QB">Quarterback</option>
        <option value="RB">Running Back</option>
        <option value="WR">Wide Receiver</option>
        <!-- Add other positions as per your data -->
    </select>
</form>

<?php
if ($playersData->num_rows > 0) {
    // Display the table only if there are players to show
    ?>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Position</th>
                    <th>Jersey Number</th>
                    <th>Year</th>
                    <th>Team ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($player = $playersData->fetch_assoc()) {
                    // Check if filterPosition is set and if the player's position matches the filter
                    if (isset($_POST['filterPosition']) && $_POST['filterPosition'] !== "" && $player['position'] !== $_POST['filterPosition']) {
                        continue; // Skip this player if it doesn't match the filter
                    }
                    ?>
                    <tr>
                        <td><?php echo $player['player_id']; ?></td>
                        <td><?php echo $player['first_name']; ?></td>
                        <td><?php echo $player['last_name']; ?></td>
                        <td><?php echo $player['position']; ?></td>
                        <td><?php echo $player['jersey_number']; ?></td>
                        <td><?php echo $player['year']; ?></td>
                        <td><?php echo $player['team_id']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    // No players to display
    echo "No player data available.";
}
?>
