<!DOCTYPE html>
<html>
    <head>
    <style>
.container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td,th {
    vertical-align: middle;
  }
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
            <th scope="col">Day</th>
            <th scope="col">Article Name</th>
            <th scope="col">Author</th>
            <th scope="col">Shares</th>
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
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Bootstrap Grid 4 Tutorial and Examples</td>
            <td>Cristina</td>
            <td>3.417</td>
            <td>
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Bootstrap Flexbox Tutorial and Examples</td>
            <td>Cristina</td>
            <td>1.234</td>
            <td>
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
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