
<?php
include 'db_connect.php';
include 'admin_check.php';

$result = $conn->query("SELECT * FROM users");
?>

<style>
  body {
  font-family: 'Segoe UI', sans-serif;
  background: #f9f9f9;
  padding: 30px;
}

h3 {
  text-align: center;
  color: #28a745;
  margin-bottom: 30px;
}

table {
  width: 100%;
  border-collapse: collapse;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

th, td {
  padding: 15px;
  border-bottom: 1px solid #ddd;
  text-align: center;
}

th {
  background-color: #28a745;
  color: white;
}

tr:hover {
  background-color: #f1f1f1;
}

.btn-delete {
  background-color: #dc3545;
  color: white;
  padding: 6px 14px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  transition: background-color 0.2s ease-in-out;
}

.btn-delete:hover {
  background-color: #c82333;
}


</style>

<h3>Manage Users</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>User ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($user = $result->fetch_assoc()) : ?>
    <tr>
      <td><?= $user['id'] ?></td>
      <td><?= $user['username'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['phone_number'] ?></td>
      <td>
        <form action="delete_user.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
          <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
          <button type="submit" class="btn-delete">Delete</button>
        </form>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
