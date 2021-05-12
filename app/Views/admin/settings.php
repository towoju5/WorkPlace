<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <div class="header-sub-title d-flex justify-content-between align-items-center">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                    <span class="breadcrumb-item">Admin</span>
                    <span class="breadcrumb-item active"><?=ucfirst($title)?></span>
                </nav>
            </div>
        </div>
        <div class="col-md-8 offset-2">
            <?php if (isset($validation)): ?>
            <div class="alert alert-warning">
                <?=$validation->listErrors()?>
            </div>
            <?php endif?>
        </div>
        <div class="card" id="add">
            <div class="card-body">
                <?=form_open_multipart()?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" forname="exampleModalLabel">Website settings (Please note all fields are important)</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="firstname" class="col-sm-2 col-form-label">Website Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="site_title" value="<?= conf['site_title'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-sm-2 col-form-label">Website Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="site_email" value="<?= conf['site_email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-sm-2 col-form-label">Website Logo</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="logo" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-sm-2 col-form-label">Current Term </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cur_term" value="<?= conf['cur_term'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" value="<?= conf['address'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Support Phone Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="phone" value="<?= conf['phone'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Card Prefix</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cardprefix" value="<?= conf['cardprefix'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Max Card Usage (99999 for unlimited)</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="maxcardusage" value="<?= conf['maxcardusage'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Next Term Starts?</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="next_term_begin" value="<?= conf['next_term_begin'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Next Term Ends?</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="next_term_ends" value="<?= conf['next_term_ends'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"> Update Settings </button>
                    </div>
                </div>
                <?=form_close()?>
            </div>
        </div>
    </div>

    <style>
    ul>li {
        list-style: none;
    }
    </style>