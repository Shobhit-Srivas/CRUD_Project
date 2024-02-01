<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1 class="bg-warning text-light text-center">View Records</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-center bg-dark text-center text-light fs-4">
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Number</th>
                <th scope="col">Image</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            global $con;
            $fetch = "select * from record";
            $res = mysqli_query($con, $fetch) or die(mysqli_error($con));
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
            ?>
                    <tr class="text-center">
                        <td scope="col"><?php echo $row['id']; ?></td>
                        <td scope="col"><?php echo $row['uname']; ?></td>
                        <td scope="col"><?php echo $row['age']; ?></td>
                        <td scope="col"><?php echo $row['number']; ?></td>
                        <td scope="col"><img style="height: 100px; width: 180px;" src="upload/<?php echo $row['image']; ?>" alt=""></td>
                        <td scope="col"><a href="update.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td scope="col"><a href="delete.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
            <?php }
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
    <div class="text-center">
        <a href="Create.php" class="btn btn-secondary fw-bold text-light">Add Record</a>
    </div>
</body>

</html>