<!-- Page Container START -->
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Admin</a>
                    <span class="breadcrumb-item" href="#"><?= $title ?></span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row m-b-30">
                    <div class="col-lg-8">
                        <div class="d-md-flex">
                            <div class="m-b-10 m-r-15">
                                <select name="website" class="form-control" onchange="location=this.value;">
                                    <option selected>Sort Result</option>
                                    <option value="<?= base_url('admin/all') ?>">Show All</option>
                                    <option value="<?= base_url('admin/all/?&type=checkin') ?>">CheckIn's Only</option>
                                    <option value="<?= base_url('admin/all/?&type=checkout') ?>">Checkouts Only</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <?php //print_r($hist) ?>
                    <table class="table table-hover e-commerce-table" id="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Role</th>
                                <th>Action Peformed</th>
                                <th>Date Added</th>
                                <th>Time Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($hist as $c): ?>
                            <tr>
                                <td> <?= $i++ ?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6 class="m-b-0"><?= $c['firstname'].' '.$c['firstname'] ?></h6>
                                    </div>
                                </td>
                                <td><?= $c['role'] ?></td>
                                <td><?= $c['action'] ?></td>
                                <td><?= $c['date'] ?></td>
                                <td><?= $c['time'] ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>