<h1>Coaches</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th></th>
      </tr>
    </thead> 
    <tbody>
<?php
while ($coach = $coaches->fetch_assoc()) {
?>
      <tr>
        <td><?php echo $coach['coach_id']; ?></td>
        <td><?php echo $coach['first_name']; ?></td>
        <td><?php echo $coach['last_name']; ?></td>
        <td><?php echo $coach['position']; ?></td>
        <td><a href="coaches-with-players.php?id=<?php echo $coach['coach_id']; ?>">Players</a></td>
      </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
