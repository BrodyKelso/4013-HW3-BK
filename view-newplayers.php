
<?php
if (isset($allPlayers) && $allPlayers->num_rows > 0) {
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
                    <!-- Removed "Team ID" header -->
                </tr>
            </thead>
            <tbody>
                <?php
                while ($player = $allPlayers->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $player['player_id']; ?></td>
                        <td><?php echo $player['first_name']; ?></td>
                        <td><?php echo $player['last_name']; ?></td>
                        <td><?php echo $player['position']; ?></td>
                        <td><?php echo $player['jersey_number']; ?></td>
                        <td><?php echo $player['year']; ?></td>
                        <!-- Removed displaying "Team ID" -->
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
