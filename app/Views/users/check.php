<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(isset($title)) { echo $title; } else { conf['site_title']; } ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo/favicon.png">
    <!-- Core css -->
    <link href="<?= base_url() ?>/assets/css/app.min.css" rel="stylesheet">
    <!-- Toastr -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex"
            style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <h2 class="m-5"><?= conf['site_title'] . ' Result Checker'?></h2>
                                    </div>

                                    <?php if(isset($validation)): ?>
                                    <div class="alert alert-danger">
                                        <?= $validation->listErrors()  ?>
                                    </div>
                                    <?php endif ?>
                                    <?= form_open() ?>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label class="font-weight-semibold" for="email">Student ID:</label>
                                                <div class="input-affix">
                                                    <i class="prefix-icon anticon anticon-user"></i>
                                                    <input type="text" class="form-control" name="userId" id="userId"
                                                        placeholder="Student ID">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="font-weight-semibold" for="email">Student Class:</label>
                                                <div class="input-affix">
                                                    <i class="prefix-icon anticon anticon-user-add"></i>
                                                    <select class="form-control" name="class">
                                                        <?php foreach($class as $c) : ?>
                                                        <option value="<?= $c['id'] ?>"> <?= $c['name'] ?> </option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label class="font-weight-semibold" for="email">Term:</label>
                                                <div class="input-affix">
                                                    <i class="prefix-icon anticon anticon-sync"></i>
                                                    <select class="form-control" name="term">
                                                        <option selected value="1" > First Term </option>
                                                        <option value="2" > Second Term </option>
                                                        <option value="3" > Third Term </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="font-weight-semibold" for="email">Section/Year:</label>
                                                <div class="input-affix">
                                                    <i class="prefix-icon anticon anticon-clock-circle"></i>
                                                    <select class="form-control" name="section">
                                                        <option selected value="2019/2020" > 2019/2020 </option>
                                                        <option value="2020/2021" > 2020/2021 </option>
                                                        <option value="2021/2022" > 2021/2022 </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">PIN:</label>

                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="text" class="form-control" name="pin" id="pin"
                                                placeholder="PIN Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Serial No:</label>

                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="text" class="form-control" name="serial" id="serial"
                                                placeholder="Serial No">
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-hover btn-primary btn-block"> Check Result </button>

                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    li {
        list-style-type: none;
        margin-left: 10px;
    }
    </style>

    <!-- Core Vendors JS -->
    <script src="<?= base_url() ?>/assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?= base_url() ?>/assets/js/app.min.js"></script>

    <!-- Toastr -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <!-- //show Toastr if active -->
    <?php $session = session() ?>

    <?php if($session->getFlashdata('success') != null): ?>
    <script type='text/javascript'>
    toastr.success('<?= $session->getFlashdata('success') ?>');
    </script>
    <?php elseif($session->getFlashdata('error') != null): ?>
    <script type='text/javascript'>
    toastr.error('<?= $session->getFlashdata('error') ?>');
    </script>
    <?php elseif($session->getFlashdata('info') != null): ?>
    <script type='text/javascript'>
    toastr.info('<?= $session->getFlashdata('info') ?>');
    </script>
    <?php elseif($session->getFlashdata('warning') != null): ?>
    <script type='text/javascript'>
    toastr.warning('<?= $session->getFlashdata('warning') ?>');
    </script>
    <?php endif ?>
</body>

</html>