<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Hover Rows</h2>
        <table class="table table-hover">
            <thead>
                <tr>

                    <th><input type="checkbox" id="select_all"></th>
                    <th>NIM</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include "service/database.php";

                $strSQL = "SELECT * FROM users ORDER BY id DESC"; //SELECT nim, username, password, email;
                $hasil = mysqli_query($conn, $strSQL);
                if (mysqli_num_rows($hasil) == 0) {
                    echo "
                    <tr>
                    <td colspan='5'>Data kosong<td>
                    <tr>";
                } else {
                    while ($row = mysqli_fetch_assoc($hasil)) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $password = $row['password'];

                        echo "
                    <tr>
                    <td><input type='checkbox' name='checked_id[]' value='$id'></td>
                    <td>$id</td>
                    <td>$username</td>
                    <td>$password</td>
                    <td>
                    <a href='editdata.php?id=' class='btn btn-info btn-sm'>edit</a>
                    <a href='editdata.php?id=' class='btn btn-danger btn-sm'>hapus</a>
                    </td>
                    </tr>
                    ";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>