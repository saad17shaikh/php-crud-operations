<?php
include 'connect.php';
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
    <div class="container my-5">
        <table class="table table-info my-3  ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">MOBILE</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">OPERATIONS</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM crud";
            $result = mysqli_query($con,$sql);
             if($result){
                // $row = mysqli_fetch_assoc($result);
                // echo $row['username'];
                // using loops
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['mobile']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-white"> Delete </a>  
                    <button class="btn-primary btn"> <a href="update.php?id=<?php echo $row['id']; ?>" class="text-white"> Update </a> </button> </button></td>
                    </tr>
                    <?php
                }
            }
                ?>
            
            
        </table>
        <a href="add_user.php"><button class="btn btn-primary my-3">Add User</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>