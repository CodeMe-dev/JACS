<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/114463f0c8.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
.container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.td,th {
    vertical-align: middle;
  }
</style>   
    </head>
    <body>
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">Table</th>
            <th scope="col">New Table</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Bootstrap 4 CDN and Starter Template</td>
            <td>Cristina</td>
            <td>2.846</td>
            <td>
              <button type="button" class="btn btn-primary"><i class="fa-solid fa-circle-check"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>

<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jacs_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$table_name = "usersa";
$query = "SELECT 1 FROM $table_name LIMIT 1";
$result = mysqli_query($conn, $query);

if($result !== false) {
    // Table exists, reject creation
    echo "Table already exists";
} else {

// Create table
$sql = "CREATE TABLE $table_name (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Delete table
$delete_tb = "usersa";
$sql = "DROP TABLE users";
if (mysqli_query($conn, $sql)) {
    echo "Table deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($conn);
}

}
mysqli_close($conn);
?>