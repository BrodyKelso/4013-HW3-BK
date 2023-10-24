<div class="row">
    <div class="col">
        <h1>Coaches</h1>
    </div>
    <div class="col-auto">
        <?php
        include "view-coaches-newform.php";
        ?>
    </div>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Team ID</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    <?php
    while ($coach = $coaches->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo isset($coach['coach_id']) ? $coach['coach_id'] : 'N/A'; ?></td>
            <td><?php echo isset($coach['first_name']) ? $coach['first_name'] : 'N/A'; ?></td>
            <td><?php echo isset($coach['last_name']) ? $coach['last_name'] : 'N/A'; ?></td>
            <td><?php echo isset($coach['team_id']) ? $coach['team_id'] : 'N/A'; ?></td> <!-- Here's the line -->
            <td>
                <?php include "view-coaches-editform.php"; ?>
            </td>
            <td>
                <!-- Delete action -->
                <form method="post">
                    <input type="hidden" name="actionType" value="Delete">
                    <input type="hidden" name="coach_id" value="<?php echo isset($coach['coach_id']) ? $coach['coach_id'] : ''; ?>">
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
