<h1>Games</h1>
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
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

