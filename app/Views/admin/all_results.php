<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header no-gutters has-tab">
            <?= form_open() ?>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="font-weight-semibold" for="oldPassword">Student Class:</label>
                    <select class="select2" name="state">
                        <option value="AP">Apples</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label class="font-weight-semibold" for="newPassword">Subject:</label>
                    <select class="select2" name="state">
                        <option value="AP">Apples</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <button class="btn btn-primary m-t-30 btn-block">View Result</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
        <div class="col-md-8 offset-2">
            <?php if (isset($validation)): ?>
            <div class="alert alert-warning">
                <?=$validation->listErrors()?>
            </div>
            <?php endif?>
        </div>
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table" id="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Role</th>
                                <?php foreach($subject as $k => $s): ?>
                                <th> <?= $k ?> </th>
                                <?php endforeach ?>
                            </tr>
                        </thead>
                        <?php /*
                        <tbody>
                            <?php $i = 1;foreach ($empl as $e): ?>
                        <tr>
                            <td>
                                <?=$i++?>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h6 class="m-b-0"><?=$e['firstname'] . ' ' . $e['firstname']?></h6>
                                </div>
                            </td>
                            <td><?=$e['role']?></td>
                            <td><?=$e['email']?></td>
                            <td>
                                <?=$e['created_at']?>
                            </td>
                            <td class="mx-auto">
                                <button class="btn btn-default btn-sm btn-rounded ml-1">
                                    <a href="<?=current_url() . '/delete/' . $e['id']?>"><i
                                            class="anticon anticon-delete"></i> Delete </a>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach?>
                        </tbody>
                        */ ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->
    <!-- Add Employee Modal -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <?=form_open()?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" forname="exampleModalLabel">Add New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="firstname" class="col-sm-2 col-form-label">Firstname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-2 col-form-label">Lastname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">UserRole</label>
                        <div class="col-sm-10">
                            <select name="role" name="role" class="form-control">
                                <option selected value="staff">Staff</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> Add Employee </button>
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

 