<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            .text-red{
                color: #ff0000;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 1.2rem;
            }
        </style>
</head>

<body>
    <div class="container"
        style="width: 60% !important; height: 100vh; background-color: bisque; display: flex; align-items: center; justify-content: center;">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="username" value="">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
            <?php
            include('config.php');
            session_start();
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                // $user = mysqli_real_escape_string($conn,$_POST['username']);
                $user = $_POST['username'];
                // $usr_password = mysqli_real_escape_string($conn,$_POST['password']) ;
                $usr_password = $_POST['password'];
                $sql = "SELECT 'Serial_No' FROM user_login_info WHERE username = '$user' and password = '$usr_password'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                // $active = $row['active'];
                $count = mysqli_num_rows($result);
                //  if result matched then table row must be 1
                
                if ($count ==1){
                    echo "<br><span class='text-red'> login successfully</span>";
                }else{
                    echo "<br><span class='text-red'>User or password is wrong</span>";
                }
            }


            // echo "Hello there this is php page <br>";
            // if (isset($_REQUEST['submit'])) {
            //     $user = $_POST['username'];
            //     $usr_password = $_POST['password'];
            //     echo "$user, $usr_password";

                
            


            //     if (!$conn) {
            //         echo "database not connected";
            //     } else {
            //         echo "database connected";
            //     }
            // }
            // ?>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</body>

</html>
<!-- extension=php_pdo.dll
 extension=php_pdo_mysql.dll -->