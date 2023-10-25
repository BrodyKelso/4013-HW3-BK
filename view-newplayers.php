<div class="row">
    <div class="col">
        <h1>Players</h1>
    </div>
    <div class="col-auto">
        <?php
        include "view-newplayers-newform.php";
        ?>
    </div>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Player ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Jersey Number</th>
                <th>Year</th>
                <th>Team ID</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($player = $players->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $player['player_id']; ?></td>
                    <td><?php echo $player['first_name']; ?></td>
                    <td><?php echo $player['last_name']; ?></td>
                    <td><?php echo $player['position']; ?></td>
                    <td><?php echo $player['jersey_number']; ?></td>
                    <td><?php echo $player['year']; ?></td>
                    <td><?php echo $player['team_id']; ?></td>
                    
                    <td>
                        <?php include "view-newplayers-editform.php"; ?>
                    </td>
                    
                    <td>
                        <!-- Delete action -->
                        <form method="post">
                            <input type="hidden" name="actionType" value="Delete">
                            <input type="hidden" name="player_id" value="<?php echo $player['player_id']; ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
