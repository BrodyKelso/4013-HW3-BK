<div class = "row">
    <div class = "col">
    <h1>Teams</h1>    
</div>
<div class = "col-auto">
<?php
include "view-teams-newform.php";
?>
</div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>TeamName</th>
        <th>SeasonYear</th>
        <th>Wins</th>
        <th>Losses</th>
      </tr>
    </thead> 
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
?>
      <tr>
        <td><?php echo $team['team_id']; ?> </td>
        <td><?php echo $team['team_name']; ?></td>
        <td><?php echo $team['season_year']; ?></td>
        <td><?php echo $team['win']; ?></td>  
        <td><?php echo $team['loss']; ?></td>  
      </tr>
<?php
}
?>
    </tbody>
  </table>
</div>