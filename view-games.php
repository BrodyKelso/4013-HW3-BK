<div class="row">
    <div class="col">
        <h1>Games</h1>
    </div>
    <div class="col-auto">
        <?php
        // Include a form for adding new games if needed
        include "view-games-newform.php";
        ?>
    </div>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Opponent Name</th>
                <th>Date</th>
                <th>Location</th>
                <th>Result</th>
                <th>Team ID</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($game = $games->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $game['game_id']; ?></td>
                    <td><?php echo $game['opponent_name']; ?></td>
                    <td><?php echo $game['date']; ?></td>
                    <td><?php echo $game['location']; ?></td>
                    <td><?php echo $game['result']; ?></td>
                    <td><?php echo $game['team_id']; ?></td>
                    
                    <td>
                        <?php include "view-games-editform.php"; ?>
                    </td>
                    
                    <td>
                        <!-- Delete action -->
                        <form method="post">
                            <input type="hidden" name="actionType" value="Delete">
                            <input type="hidden" name="game_id" value="<?php echo $game['game_id']; ?>">
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
