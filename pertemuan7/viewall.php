<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>

<body>
    <!-- HEADER -->
    <?php include "layout/header.html"; ?>
    <!-- HEADER END -->

    <div class="container">
        <h2>Biodata Mahasiswa</h2>
        <div class="row mb-2">
            <div class="col-sm-12">
                <span class="m-1">
                    <a href="tambah.php" class="btn btn-info">Add Data</a>
                </span>
            </div>
        </div>
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $strSQL = "SELECT * FROM users"; //SELECT nim, username, password, email;
                $execStrSQL = mysqli_query($conn, $strSQL);

                if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {

                ?>
                        <tr>
                            <td><a href="simpandata.php" class="text-decoration-none"><?= $row["id"] ?></a></td>
                            <td><?= $row["username"] ?></td>
                            <td><?= $row["password"] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>