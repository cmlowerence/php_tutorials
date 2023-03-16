<?php
$localhost = '127.0.0.1';
$username = "root";
$password = '';
$dbname = 'web_dev';
if (isset($_REQUEST['submit'])) {
    // Creating a connection
    $conn = mysqli_connect($localhost, $username, $password, $dbname);
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['emailID'];
    $MYpassword = $_POST['password'];   echo "Checking connection <br>";
    if (!$conn) {
        echo "Database connection failed";
    } else {
        echo "Database connected <br>";
        $sql = "INSERT INTO formdata (FName,LName,Email,Password) VALUES ('$fname','$lname','$email','$MYpassword')";
        if (mysqli_query($conn, $sql)) {
            echo "Record successfully pushed. $fname $lname is now in database.";
        } else {
            echo "some error occurred.";
        }


    }
}

?>