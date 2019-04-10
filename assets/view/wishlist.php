<div class="container">
    <form action="" method='post'>
        <div class="row">
            <div class="col-lg">
                <div class="jumbotron jumbotron-fluid bg-dark">
                    <div class="container">
                        <h1 class="mb-4">Input</h1>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Wislist name</label>
                                <input type="text" class="form-control" id="inputku" name="wishlist" placeholder="Insert name">
                            </div>
                            <div class="col-md-6">
                                <label>Cost</label>
                                <input type="text" class="form-control" id="inputku" name="cost" placeholder="Insert cost">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Link url product</label>
                            <input type="text" class="form-control" id="ket" name="url" placeholder="Insert link url">
                        </div>

                        <button id='submit' name='submit' class="btn btn-primary">Ok!</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <?php if (isset($_POST['submit'])) {
        $wishlist = $_POST['wishlist'];
        $cost = $_POST['cost'];
        $url = $_POST['url'];

        $sqlAfter = "INSERT INTO wishlist VALUES('','$wishlist','$cost','$url')";

        mysqli_query($koneksi, $sqlAfter);

        header('location:datang.php?m=updatedwish');
    }
    ?>