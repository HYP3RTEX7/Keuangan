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
                                <label>Money in</label>
                                <input type="text" class="form-control" id="inputku" name="masuk" placeholder="Insert nominal" value="<?= $row['masuk'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label>Money out</label>
                                <input type="text" class="form-control" id="inputku" name="keluar" placeholder="Insert nominal" value="<?= $row['keluar'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Information</label>
                            <input type="text" class="form-control" id="ket" name="ket" placeholder="Insert information" value="<?= $row['ket'] ?>">
                        </div>

                        <button id="submit" name="submit" class="btn btn-primary">Ok!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>