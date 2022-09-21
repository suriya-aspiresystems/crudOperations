<?php
include 'database.php';
$name = "";
$email = "";
$phone = "";
$location = "";

$errorMessage = "";
$successMessage = "";
$id = $_GET['updateid'];
$sql = "Select * from register_details where id = $id";

$result = $connection->query($sql);
$row = mysqli_fetch_assoc($result);
$fName = $row['firstname'];
$lName = $row['lastname'];
$gender = $row['gender'];
$emailAddress = $row['emailaddress'];
$phone = $row['phonenumber'];
$address = $row['address'];
$password = $row['password'];
$confirmPassword = $row['confirmpassword'];
if (isset($_POST['submit'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $Gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $Password = $_POST['password'];
    $ConfirmPassword = $_POST['confirmpassword'];


    do {
        if (empty($firstName) || empty($lastName) || empty($Gender) || empty($email) || empty($phone) || empty($Password) || empty($ConfirmPassword)  || empty($address)) {
            $errorMessage = "All the Fields Are Required";
            break;
          }
      //add new Client to database
      $sql = "update register_details set id =$id,firstname = '$firstName', lastname = '$lastName' , gender = '$Gender' , phonenumber = '$phone' , address = '$address' , password = '$Password' , confirmpassword = '$ConfirmPassword' where id = $id";
      $result = $connection->query($sql);

      $successMessage = "User Added Successfully";
      if ($result){
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
    <title>PHP CRUD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
     <form action="" method="POST">
        <div class="title">
            Update Details
        </div>
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
        <div class="form">
            <div class="input_field">
                <label for="fName">First Name</label>
                <input type="text" name="fName" id="" class="input" value="<?php echo $fName; ?>">
            </div>
            <div class="input_field">
                <label for="lName">Last Name</label>
                <input type="text" name="lName" id="" class="input" value="<?php echo $lName; ?>">
            </div>
            <div class="input_field">
                <label for="Password">Password</label>
                <input type="password" name="password" id="" class="input" value="<?php echo $password; ?>">
            </div>
            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" name="confirmpassword" id="" class="input" value="<?php echo $confirmPassword; ?>">
            </div>
            <div class="input_field">
                <label for="Gender">Gender</label>
                <div class="custom_select">
                <select name="gender" id="gender-select" class="selectbox">
                    <option value="">----Select a Gender----</option>
                    <option value="Male"
                           <?php
                             if ($gender== 'Male') {
                                 echo "Selected";
                               }
                               ?>
                                    
                    >Male</option>
                    <option value="Female"
                    <?php
                             if ($gender == 'Female') {
                                 echo "Selected";
                               }
                               ?>
                    >Female</option>
                   
                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="input" value="<?php echo $emailAddress; ?>">
            </div>
            <div class="input_field">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="" class="input" value="<?php echo $phone; ?>">
            </div>
            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address" id="" class="textarea"><?php echo $address; ?></textarea>
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" name="" id="">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and Conditions</p>
            </div>
            <div class="input_field">
            <button type="submit" class="btn btn-primary" name= "submit">Update</button>
            </div>
        </div>
     </form>
    </div>
</body>
</html>