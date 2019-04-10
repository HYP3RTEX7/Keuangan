<div class="container ">
    <h1 class='mt-2'>Your money data right now!</h1>
    <a class='btn btn-primary mb-4' href='input.php'>Saving the money?</a>
    <a class='btn btn-warning mb-4' href='input-wish.php'>Add wishlist?</a>
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
    <div class="row">
        <div class="col-lg-10">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Total</th>
                        <th scope="col">Information</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM hasil";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    $value = 1;


                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= number_format($row["masuk"]) ?></td>
                            <td><?= number_format($row["keluar"]) ?></td>
                            <td><?= number_format($row["masuk"] - $row["keluar"]) ?></td>
                            <td><?= $row["ket"] ?></td>
                            <td><a href="edit.php?update=<?= $row['id']; ?>" class='badge badge-pill badge-primary'>Edit</a> | <a href="edit.php?delete=<?= $row['id']; ?>" class='badge badge-pill badge-danger'>Delete</a></td>
                        </tr> <?php
                        } ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-2">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $queryTotal = mysqli_query($koneksi, $sql);
                    $a = 0;
                    ?>
                    <?php while ($row = mysqli_fetch_array($queryTotal)) {  ?>
                        <?php $a++;
                        $totalMasuk[$a] = $row['masuk'];
                        $totalKeluar[$a] = $row['keluar'];
                        $totalSemua = array_sum($totalMasuk) - array_sum($totalKeluar);
                    } ?>
                    <tr>
                        <th><?= number_format($totalSemua); ?></th>
                    </tr>




                </tbody>
            </table>
        </div>
    </div>
    <table class='table'>
        <thead class='thead-dark'>
            <tr>
                <th scope='col'>No</th>
                <th scope='col'>Wishlist</th>
                <th scope='col'>Cost</th>
                <th scope='col'>Money left</th>
                <th scope='col'>Link E-commerce</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $now = 1;
            $sqlw = "SELECT * FROM wishlist";
            $queryw = mysqli_query($koneksi, $sqlw);
            while ($roww = mysqli_fetch_array($queryw)) {
                ?>
                <tr>
                    <td><?= $now++ ?></td>
                    <td><?= $roww['wishlist'] ?></td>
                    <td><?= number_format($roww['cost']) ?></td>
                    <td><?= number_format($totalSemua - $roww['cost']) ?></td>
                    <td><a href="<?= $roww['url'] ?>">Link product</a></td>
                    <td><a href="edit.php?updatewish=<?= $roww['id']; ?>" class='badge badge-pill badge-primary'>Edit</a> | <a href="edit.php?deletewish=<?= $roww['id']; ?>" class='badge badge-pill badge-danger'>Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>