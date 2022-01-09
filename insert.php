<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum_9";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $position = $_POST['position'];
        $status = $_POST['status'];
        $query = "INSERT INTO karyawan(nama, email, address, gender, position, status) values('$name', '$email', '$address', '$gender', '$position', '$status');";
        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
    } else {
        echo " all fields required";
    }
}

function getData()
{
    global $conn;
    $data = mysqli_query($conn, 'SELECT * FROM karyawan');
    $list_karyawan = [];
    while ($karyawan = mysqli_fetch_assoc($data)) {
        $list_karyawan[] = $karyawan;
    }
    return $list_karyawan;
}

$dataUtama = getData();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($dataUtama) : ?>
                <?php foreach ($dataUtama as $index => $data) : ?>
                    <tr class="hover">
                        <td><?= $index + 1; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><?= $data['address']; ?></td>
                        <td><?= $data['gender']; ?></td>
                        <td><?= $data['position']; ?></td>
                        <td><?= $data['status']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-error btn-outline text-base-content hover" href="delete_data.php?id=<?= $data["id"]; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="mahranSql.php">Kembali</a>
</body>

</html>