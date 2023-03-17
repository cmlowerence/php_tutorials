<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container" style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <?php
        include('./mysql_conf.php');
        if (isset($_REQUEST['submit'])) {
            $f_name = $_POST['first_name'];
            $l_name = $_POST['last_name'];
            $u_name = $_POST['username'];
            $p_word = $_POST['password'];
            // echo "Registration Successful for <b><u>$f_name $l_name</u></b> with user-name <b><i><u>$u_name </i></b></u> and password <i><u>$p_word.</u></i>";
            // if (!$conn) {
            //     echo "<p class='display-3 bg-danger text-primary-emphasis' style='padding: 20px;'> Error to connect with MySQL database</p>";
            // } else {
            //     echo "<p class='display-3 bg-success text-primary-emphasis style='padding: 20px;''>MySQL database connected successfully</p>";
            // }
        



            $sql = "INSERT INTO users (First_Name,Last_Name,Username,Password) VALUES ('$f_name','$l_name','$u_name','$p_word')";

            if (mysqli_query($conn, $sql)) {
                // if (mysqli_error($conn)){
                //   echo mysqli_error($conn);  
                // }else{
                //     echo "no error found";
                // }
        



                echo "<p class='display-3 bg-success text-primary-emphasis style='padding: 20px;''>User $f_name is successfully registered in database</p>";
            } else {
                echo "<p class='display-3 bg-danger text-primary-emphasis' style='padding: 20px;'>There is some error</p>";
            }
        }
        ?>
    </div>
</body>

</html>