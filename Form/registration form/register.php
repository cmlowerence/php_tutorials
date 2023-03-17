<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="width: 100vw; height: 100vh; display: grid; place-items: center;">
        <h1 class="display-1">Registration Form</h1>
        <form class="mb-3"
            style="width: 60%; display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 1rem;"
            method="post" action="./register_config.php">
            <div class="col-md-6">
                <label for="validationDefault01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="Mark" name="first_name"
                    required">
            </div>
            <div class="col-md-6">
                <label for="validationDefault02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Otto" name="last_name"
                    required>
            </div>
            <div class="col-md-6">
                <label for="validationDefaultUsername" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername"
                        aria-describedby="inputGroupPrepend2" placeholder="markOtto@gmail.com" name="username" required>
                </div>
                <!-- <?php
                include('./mysql_conf.php');
                    if (isset($_REQUEST['username'])){
                        echo "some message";
                    }
                ?> -->
            </div>
            <div class="col-md-6">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control"
                        aria-describedby="passwordHelpInline" name="password">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Register</button>
            <a class="btn btn-primary" href="./login.php">Go to login Page</a>
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