<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .flex {
        display: flex;
        flex-direction: column;
    }
</style>

<body>
    <div class="container" style="width: 100vw; height: 100vh; display: grid; place-items: center;">
        <form
            style="width: 60%; display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 1rem;"
            method="post" action="">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>

            <?php
            include("./mysql_conf.php");


            session_start();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = $_POST['username'];
                $u_password = $_POST['password'];
                $sql = "SELECT ID FROM users WHERE Username = '$user' and Password = '$u_password'";
                $result = mysqli_query($conn,$sql);
                // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);

                if ($count ==1){
                    echo "<p class='text-success'>login successfully </p>";
                }else{
                    echo "<p class ='text-danger'>Either Username or Password is wrong</p>";
                }
            }
            ?>
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