<form action="act_aksi.php" method='post'>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="jumbotron jumbotron-fluid bg-dark">
                    <div class="container">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <h1 class="mb-4">Input</h1>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Wislist name</label>
                                <input type="text" class="form-control" id="inputku" name="wishlist" placeholder="Insert name" value="<?= $row['wishlist'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label>Cost</label>
                                <input type="text" class="form-control" id="inputku" name="cost" placeholder="Insert cost" value="<?= $row['cost'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Link url product</label>
                            <input type="text" class="form-control" id="ket" name="url" placeholder="Insert link url" value="<?= $row['url'] ?>">
                        </div>

                        <button id="submit" name="submit" class="btn btn-primary">Ok!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>