<h1>Coaches with Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Coach First Name</th>
        <th>Coach Last Name</th>
        <th>Player First Name</th>
        <th>Player Last Name</th>
      </tr>
    </thead> 
    <tbody>
<?php
while ($coachPlayer = $coachesPlayers->fetch_assoc()) {
?>
      <tr>
        <td><?php echo $coachPlayer['coach_first_name']; ?></td>
        <td><?php echo $coachPlayer['coach_last_name']; ?></td>
        <td><?php echo $coachPlayer['player_first_name']; ?></td>
        <td><?php echo $coachPlayer['player_last_name']; ?></td>
      </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
