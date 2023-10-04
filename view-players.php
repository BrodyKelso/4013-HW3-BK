<h1>Players</h1>
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
// Updated variable name from $players to $coachesPlayers
while ($player = $coachesPlayers->fetch_assoc()) {
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
