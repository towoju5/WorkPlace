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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body m-5">
                        <div class="col-md-6 offset-3">
                            <?= form_open() ?>
                            <div class="form-group mt-5">
                                <input type="number" name="quantity" class="form-control" >
                            </div>
                            <div class="col-md-6 offset-3">
                                <button type="submit" class="btn btn-hover btn-primary btn-block">Generate</button>
                            </div>
                            <?= form_close() ?>
                        </div>
                        <hr class="v-25">
                        <?php /*
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-body">
                                    <div class="title">
                                        <h3> Subject & ID</h3>
                                        <hr class="v-25">
                                    </div>
                                    <!-- // table to show Subject and there ID -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-body">
                                    <div class="title">
                                        <h2> XoXo</h2>
                                    </div>
                                </div>
                            </div>
                        </div> */ ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->