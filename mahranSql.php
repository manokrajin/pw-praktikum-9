<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .formBox {
            width: 50%;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<script>
    $conn = mysqli_connect("localhost", "root", "", "praktikum_9");
</script>

<body>

    <div class="formBox border p-3">
        <span>Mahran Radifan Zhafir<br>105219001</span>
        <form action="insert.php" method="post">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="gender">
                        <option selected>Silahkan Memilih</option>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="position" class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="position">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected>Silahkan Memilih</option>
                        <option value="full">Fulltime</option>
                        <option value="half">Halftime</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="submit">submit</button>
        </form>

    </div>
</body>

</html>