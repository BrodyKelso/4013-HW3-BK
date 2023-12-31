<h1>Players Coached</h1>
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
      </tr>
    </thead>
    <tbody>
      <?php
      while ($player = $coachesPlayers->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $player['player_id']; ?></td>
          <td><?php echo $player['first_name']; ?></td>
          <td><?php echo $player['last_name']; ?></td>
          <td><?php echo $player['position']; ?></td>
          <td><?php echo $player['jersey_number']; ?></td>
          <td><?php echo $player['year']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
