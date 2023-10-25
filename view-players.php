<div class="row">
    <div class="col">
        <h1>Players</h1>
    </div>
    <div class="col-auto">
        <?php
        include "view-players-newform.php";
        ?>
    </div>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Position</th>
                <th>Jersey Number</th>
                <th>Year</th>
                <th>TeamID</th>
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
                        <?php include "view-players-editform.php"; ?>
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
