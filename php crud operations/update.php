<?php
include 'database.php';
$name = "";
$email = "";
$phone = "";
$location = "";

$errorMessage = "";
$successMessage = "";
$id = $_GET['updateid'];
$sql = "Select * from users where id = $id";

$result = $connection->query($sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$location = $row['location'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone  = $_POST['phone'];
    $location = $_POST['location'];
    

    do {
      if (empty($name) || empty($email) || empty($phone) || empty($location)) {
        $errorMessage = "All the Fields Are Required";
        break;
      }

      //add new Client to database
      $sql = "update users set id =$id,name= '$name',email='$email' ,phone= '$phone' ,location = '$location' where id = $id";
      $result = $connection->query($sql);

      $successMessage = "User Added Successfully";
      if($result){
        header('location:display.php');
      }
      //exit;

    } while(false);

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
    <div class ="container my-5">
        <h2>Update User</h2>
        <?php
              if (!empty($errorMessage)) {
                echo "
                  <div class = 'alert alert-warning alert-dismissible fade show' role = 'alert'>
                     <strong>$errorMessage</strong>
                     <button type='button' class = 'btn-close' fade show data-bs-dismiss = 'alert' aria-label = 'Close'></button>
                 </div>
                
               ";
          }
          ?>
        <form method ="POST">
            <div class="row mb-3 my-3">
                <label for="" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $name; ?>" placeholder="Enter your name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" id="" class="form-control" value="<?php echo $email; ?>" placeholder="Enter your Email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="tel" name="phone" id="" class="form-control" value="<?php echo $phone; ?>" placeholder="Enter your Phone Number">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Location</label>
                <div class="col-sm-6">
                    <input type="text" name="location" id="" class="form-control" value="<?php echo $location; ?>" placeholder="Enter your Location">
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

                <button type="submit" class="btn btn-primary" name= "submit">Update</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a href="/php crud operations/display.php" class="btn btn-outline-primary" role="button">Cancel</a>
            </div>
          </div>
            
        </form>
    </div>
</body>
</html>