<?php
  include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h3 class= "text-center">PHP CRUD Operation</h3>
        <button class="btn btn-primary my-3"><a href= "user.php" class="text-light" style="text-decoration: none;">Add User</a></button>
        <table class="table table-striped table-hover" style= "cursor:pointer;">
         <thead>
        <tr>
            <th scope="col">Sl No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Location</th>
            <th scope="col"> Operations </th>
        </tr>
      </thead>
      <tbody>
        <?php
           $sql = "Select * from users";

           $result = $connection->query($sql);
           if($result) {
             while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $location = $row['location'];

                echo '<tr>
                          <td>' . $id . '</td>
                          <td>' . $name . '</td>
                          <td>' . $email . '</td>
                          <td>' . $phone . '</td>
                          <td>' . $location . '</td>
                          <td>
                            <button class = "btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light"  style="text-decoration:none;">Update</a></button>
                            <button class = "btn btn-danger"><a href="delete.php?deleteid=' . $id . ' " class="text-light" style="text-decoration:none;">Delete</a></button> 
                          </td>   
                        </tr>';
             }
           }
        ?>
          
         
    </tbody>
  </table>
    </div>

</body>
</html>