<?php

include("/var/www/html/Employee_Management_System/libraries/DatabaseConnection.php");
class admin extends DatabaseConnection
{
    function login($email, $password)
    {
        $sql = "SELECT * From login_details where email= '$email' and password = '$password' ";
        $this->setQuery($sql);
        return $this->load
    }
}