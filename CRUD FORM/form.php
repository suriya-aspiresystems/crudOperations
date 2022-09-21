<?php

include 'database.php' ;

if (!empty($_POST['register'])) {
    //accept form details
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $gender = $_POST['gender'];
    $emailAddress = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];

    if ($fName != "" && $lName != "" && $gender != "" && $confirmPassword != "" && $password != "" && $address != "" && $emailAddress != "") {
        $sql = "insert into register_details(firstname,lastname,gender,emailaddress,phonenumber,address,password,confirmpassword) 
                values('$fName','$lName','$gender','$emailAddress','$phone' , '$address','$password','$confirmPassword')";
        $result = $connection->query($sql);

        if ($result) {
            header("location: /CRUD FORM/display.php");
        } else {
            echo "Failed";
        }
    }
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
     <form action="" method="POST" id="create-account-form">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label for="fName">First Name</label>
                <input type="text" name="fName" id="firstName" class="input">
            </div>
            <div class="input_field">
                <label for="lName">Last Name</label>
                <input type="text" name="lName" id="lastName" class="input">
             
            </div>
            <div class="input_field">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password" class="input">
            </div>
            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" name="confirmpassword" id="confirm-password" class="input">
            </div>
            <div class="input_field">
                <label for="Gender">Gender</label>
                <div class="custom_select">
                <select name="gender" id="gender_select" class="selectbox">
                    <option value="">----Select a Gender----</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Not Prefer to say">Not Prefer to Say</option>
                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="input">
            </div>
            <div class="input_field">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="input">
            </div>
            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address" id="" class="textarea"></textarea>
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" name="" id="">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and Conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
     </form>
    </div>
</body>
</html>

