<h1>Coaches</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <!-- ... other columns as per your database structure -->
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
        <!-- ... other columns as per your database structure -->
      </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
