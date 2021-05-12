<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(isset($title)) { echo $title; } else { echo "e-Result Portal"; } ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?= base_url() ?>/assets/css/app.min.css" rel="stylesheet">

<!-- Toastr -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="<?= base_url() ?>/public/uploads/<?= conf['logo'] ?>">
                                        <h2 class="m-b-0">Sign In</h2>
                                    </div>

                                    <?php if(isset($validation)): ?>
                                        <div class="alert alert-danger">
                                            <?= $validation->listErrors()  ?>
                                        </div>
                                    <?php endif ?>

                                    <?= form_open() ?>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <a class="float-right font-size-13 text-muted" href="<?= base_url('reset') ?>">Forget Password?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-14">
                                                    Don't have an account? 
                                                    <a class="small" href="<?= base_url('register') ?>"> Signup</a>
                                                </span>
                                                <button class="btn btn-primary">SignIn</button>
                                            </div>
                                                <span class="font-size-14">
                                                    Forget your Password? 
                                                    <a class="small" href="<?= base_url('reset') ?>"> Reset</a>
                                                </span>
                                        </div>
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