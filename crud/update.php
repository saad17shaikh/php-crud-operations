<?php
include 'connect.php';
if(isset($_POST['done'])){

    $id = $_GET['id'];
    $username = $_POST['username'];
    $q = " UPDATE crud set id=$id, username='$username',email= where id=$id  ";
     
    $query = mysqli_query($con,$q);
    header('location:show_user.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="container my-3">
        <form action="update.php" method="post">
            <h1 class="text-center">UPDATE AN USER</h1>
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" placeholder="username" name="username" class="form-control" id="Username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email"
                    >
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Mobile Number</label>
                <input type="number" class="form-control" name="mobile" id="number" placeholder="Mobile Nmber"
                    >
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" placeholder="male or female"
                   >
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