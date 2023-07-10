<?php
$success = 0;
if (isset($_POST['done'])) {
    include 'connect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO crud (username,email,mobile,gender) VALUES ('$username','$email','$mobile','$gender')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $success = 1;
    } else {
        die(mysqli_error($con));
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="container my-3">
        <form action="add_user.php" method="post">
        <?php
        if($success==1){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Inserted Successfully :)</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
            <h1 class="text-center">CRUD OPERATIONS</h1>
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" placeholder="username" name="username" class="form-control" id="Username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Mobile Number</label>
                <input type="number" class="form-control" name="mobile" id="number" placeholder="Mobile Nmber">
            </div>
            <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" placeholder="male or female">
            </div>

            <button type="submit" class="btn btn-primary my-3" name="done">Submit</button>
        </form>
        <a href="show_user.php"><button class="btn btn-primary my-3">Show User</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>