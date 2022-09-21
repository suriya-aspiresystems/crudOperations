<?php
include 'database.php';
  $id = "";
  $name = "";
  $email = "";
  $phone = "";
  $location = "";

  $errorMessage = "";
  $successMessage = "";

//   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     //GET method:show
//     if (!isset($_GET['id'])) {
//         header("location: /php crud operations/index.php");
//         exit;
//     }
//     $id = $_GET['id'];

//     $sql = "select * from users where id = $id";
//     $result = $connection->query($sql);
//     $row = $result->fetch_assoc();

//     if (!$row) {
//         header("location : /php crud operations/index.php");
//         exit;
//     }
//     $name = $row["name"];
//     $email = $row["email"];
//     $phone = $row["phone"];
//     $location = $row["location"];
//   }
//   else {
//     //post:update
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $location = $_POST['location'];

//     do {

//         if (empty($name) || empty($email) || empty($phone) || empty($location)) {
//             $errorMessage = "All the Fields are Required";
//             break;
//         }

//         $sql = "UPDATE USERS " .
//         "SET name = '$name' , email = '$email' , phone = '$phone', location = '$location' " .
//         "WHERE id = $id";

//         $result = $connection->query($sql);
//         if (!$result) {
//             $errorMessage = "Invalid Query : " . $connection->error;
//             break;
//         }

//         $successMessage = "User Updated successfully";
//     } while (false);
   if($_SERVER['REQUEST_METHOD'] === 'POST') {
      
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class ="container my-">
        <h2>Update User</h2>
        <?php
              if (!empty($errorMessage)) {
                echo "
                  <div class = 'alert alert-warning alert-dismissible fade show' role = 'alert'>
                      <strong>$errorMessage</strong>
                     <button type='button' class = 'btn-close' data-bs-dismiss = 'alert' aria-label = 'Close'></button>
                 </div>
                
               ";
          }
        ?>
        <form method ="POST">
            <input type="hidden" name="" value = "<?php echo $id; ?>">
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" id="" class="form-control" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="tel" name="phone" id="" class="form-control" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Location</label>
                <div class="col-sm-6">
                    <input type="text" name="location" id="" class="form-control" value="<?php echo $location; ?>">
                </div>
            </div>
            <?php
              if (!empty($successMessage)) {
                echo "
                  <div class = 'row mb-3'>
                   <div class = 'offset-sm-3 col-sm-6'>
                     <div class = 'alert alert-success alert-dismissable fade show role='alert'>
                      <strong>$successMessage</strong>
                     <button type='button' class = 'btn-close' data-bs-dismiss = 'alert' aria-label = 'Close'></button>
                   </div>
                  </div>
                </div>
               ";
          }
        ?>
          <div class = "row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a href="/php crud operations/index.php" class="btn btn-outline-primary" role="button">Cancel</a>
            </div>
          </div>
            
        </form>
    </div>
</body>
</html>