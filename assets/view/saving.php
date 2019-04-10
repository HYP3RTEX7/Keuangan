<div class="container">
    <form action="saving-act.php" method='post'>
        <div class="row">
            <div class="col-lg">
                <div class="jumbotron jumbotron-fluid bg-dark">
                    <div class="container">
                        <h1 class="mb-4">Input</h1>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Money in</label>
                                <input type="text" class="form-control" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" name='masuk' placeholder="Insert nominal">
                            </div>
                            <div class="col-md-6">
                                <label>Money out</label>
                                <input type="text" class="form-control" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" name='keluar' placeholder="Insert nominal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Information</label>
                            <input type="text" class="form-control" id="ket" name='ket' placeholder="Insert information">
                        </div>

                        <button id='submit' name='submit' class="btn btn-primary">Ok!</button>
                    </div>
                </div>

            </div>
        </div>
    </form>