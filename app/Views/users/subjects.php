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
                <!-- <div>
                    <button type="button" class="btn btn-primary" data-backdrop="static" data-keyboard="false"
                        data-toggle="modal" data-target="#add">Add Subjects</button>
                </div> -->
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
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover e-commerce-table" id="data-table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Subject Name</th>
                                        <th> Subject ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;foreach ($subjects as $s): ?>
                                    <tr>
                                        <td>
                                            <?=$i++?>
                                        </td>
                                        <td><?= strtoupper($s['subject_name']) ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="m-b-0"><?= $s['id'] ?></h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->
    <style>
        ul>li {
            list-style: none;
        }
    </style>