<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="bg-secondary text-light text-center">Create Record</h1>
    <div class="container border border-4 mt-5">
        <form action="CreateProcess.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label fw-bold">User Name</label>
                <input type="text" name="uname" class="form-control" placeholder="Enter User Name" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Age</label>
                <input type="number" name="age" class="form-control" placeholder="Enter Age" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Phone-Number</label>
                <input type="number" name="number" class="form-control" placeholder="Enter Phone Number" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Select User Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" name="submit" class="btn btn-primary" value="Add Record">
            </div>
        </form>
    </div>
</body>

</html>