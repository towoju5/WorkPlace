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
                <div>
                    <button type="button" class="btn btn-primary" data-backdrop="static" data-keyboard="false"
                        data-toggle="modal" data-target="#add">Add Subjects</button>
                </div>
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover e-commerce-table" id="data-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject</th>
                                        <th>Teacher</th>
                                        <th class="mx-auto">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;foreach ($subjects as $s): ?>
                                    <tr>
                                        <td>
                                            <?=$i++?>
                                        </td>
                                        <td><?= ucfirst($s['subject_name']) ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="m-b-0"><?= $s['firstname'] . ' ' . $s['lastname']?></h6>
                                            </div>
                                        </td>
                                        <td class="mx-auto">
                                            <button class="btn btn-default btn-sm btn-rounded ml-1">
                                                <a href="<?=current_url() . '/delete/' . $s['subject_name']?>"><i
                                                        class="anticon anticon-delete"></i> Delete </a>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <?= form_open()?>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" forname="addsubject">Add New Subject</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="subject" class="col-form-label">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="subject">
                            </div>

                            <div class="form-group">
                                <label for="role" class="col-form-label">Subject Teacher</label>
                                <select name="teacher_id" name="teacher_id" class="form-control">
                                    <?php foreach($teacher as $t): ?>
                                    <option value="<?= $t['id'] ?>"><?= $t['firstname'] .' '.$t['lastname'] ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                        </div>
                        <div class="mx-auto mb-3">
                            <button type="submit" class="btn btn-primary"> Add Subject </button>
                        </div>
                    </div>
                    <?= form_close()?>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->

    <!-- Add Subject Modal -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <?=form_open()?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" forname="addsubject">Add New Subject</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subject" placeholder="subject">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Subject Teacher</label>
                        <div class="col-sm-10">
                            <select name="teacher_id" name="teacher_id" class="form-control">
                                <?php foreach($teacher as $t): ?>
                                <option value="<?= $t['id'] ?>"><?= $t['firstname'] .' '.$t['lastname'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> Add Subject </button>
                </div>
            </div>
            <?=form_close()?>
        </div>
    </div>

    <style>
    ul>li {
        list-style: none;
    }
    </style>