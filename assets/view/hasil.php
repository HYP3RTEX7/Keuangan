    <div class="container">
        <div class="row">
            <div class="col-lg">
                <?php
                if (isset($_GET['m'])) {
                    $m = $_GET['m'];
                    if ($m == "input") {
                        echo "<h3 class='text-success'>data has been inputed!</h3>";
                    } else if ($m == "wrong") {
                        echo "<h3 class='text-danger'>data not inputed, wrong!</h3>";
                    } else if ($m == "forbidden") {
                        echo "<h3 class='text-danger'>please inputed data in form!</h3>";
                    } else if ($m == "deleted") {
                        echo "<h3 class='text-success'>data has been deleted!</h3>";
                    } else if ($m == "updated") {
                        echo "<h3 class='text-success'>data has been updated!</h3>";
                    }
                }
                ?>
                <h1 class='mt-2'>Money data right now!</h1>
                <a class='btn btn-primary mb-4' href='input.php'>Saving the money?</a>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Masuk</th>
                            <th scope="col">Keluar</th>
                            <th scope="col">Total</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM hasil";
                        $query = mysqli_query($koneksi, $sql);
                        $no = 1;

                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row["masuk"] ?></td>
                            <td><?= $row["keluar"] ?></td>
                            <td><?= $row["masuk"] - $row["keluar"] ?></td>
                            <td><?= $row["ket"] ?></td>
                            <td><a href="edit.php?update=<?= $row['id']; ?>" class='badge badge-pill badge-primary'>Edit</a> |
                                <a href="edit.php?delete=<?= $row['id']; ?>" class='badge badge-pill badge-danger'>Delete</a></td>
                        </tr>

                        <?php 
                    } ?>
                    </tbody>
                </table> 