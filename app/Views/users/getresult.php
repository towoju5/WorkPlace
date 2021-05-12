<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= conf['site_title'] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="<?= base_url() ?>/assets/css/styles.css" rel="stylesheet">
</head>

<body class="card card-body">
    <div class="text-center">
        <img class="navbar-brand" src="https://avatars.githubusercontent.com/u/40261626" alt=""
            style="height: 70px; width: 70px;">
        <h3 class="text-center mt-3">REPORT SHEET</h3>
        <p class="text-center mt-2"><?= conf['cur_term'].' '. $section ?> ACADEMIC SESSION - <?= $class['name'] ?></p>
    </div>

    <div class="row justify-content-center align-items-center border container-xl m-auto w-75 rounded h6 mt-3">
        <div class="col-md-6">
            <p class="mt-3">Student Name: <b><?= $sid[0]['fullname'] ?></b></p>
            <p>Gender: <b><?= $sid[0]['gender'] ?></b></p>
            <p>No. In Class: <b><?= $class['total_in_class'] ?></b></p>
            <p>Next Term Begins: <b><?= conf['next_term_begin'] ?></b></p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
            <p class="mt-3">STUDENT ID: <b><?= $sid[0]['student_id'] ?></b></p>
            <p>EMAIL: <b><?= $sid[0]['parent_email'] ?></b></p>
            <p>PHONE: <b><?= $sid[0]['parent_phone'] ?></b></p>
            <p>Next Term Ends: <b><?= conf['next_term_ends'] ?></b></p>
        </div>
    </div>

    <table class="table table-bordered table-striped table-responsive-xl table-hover mt-3">
        <thead>
            <tr class="text-center">
                <th>S/N</th>
                <th col-span="3">SUBJECT</th>
                <th>CA1 <br>(20%)</th>
                <th>CA2 <br>(20%)</th>
                <th>EXAM <br>(60%)</th>
                <th>TOTAL <br>(100%)</th>
                <th>SUBJECT POS.</th>
                <th>CLASS AVG <br>(100%)</th>
                <th>GRADE</th>
                <th>GRADE REMARK</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($result as $r): ?>
            <tr>
                <td class="text-center"><?= $i++ ?></td>
                <td><?= strtoupper($r['subject_name']) ?></td>
                <td class="text-center"><?= strtoupper($r['ca1']) ?></td>
                <td class="text-center"><?= strtoupper($r['ca2']) ?></td>
                <td class="text-center"><?= strtoupper($r['exam']) ?></td>
                <td class="text-center"><?= strtoupper($r['total']) ?></td>
                <td class="text-center"><?= strtoupper($r['subject_pos']) ?></td>
                <td class="text-center"><?= strtoupper($r['class_avg']) ?></td>
                <td class="text-center"><?= strtoupper($r['grade']) ?></td>
                <td class="text-center"><?= strtoupper($r['remark']) ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div class="mt-3">
        <p class="text-center">KEYS TO GRADE -
            <span>A: 70% and Above</span>
            <span>B: 60% and 69%</span>
            <span>C: 50% and 59%</span>
            <span>P: 40% and 49%</span>
            <span>F: 39% and Below</span>
        </p>
    </div>

    <div class="row justify-content-around">
        <div class="col-5 mt-3">
            <div>
                <p class="alert-success text-center py-1 m-0">Random Text can be added below.</p>
                <div class="row">
                    <div class="col mt-0">
                        <p class="p-1 pl-2 border rounded">Neatness - <span>B</span></p>
                        <p class="p-1 pl-2 border rounded">Neatness - <span>B</span></p>
                    </div>
                    <div class="col mt-0">
                        <p class="p-1 pl-2 border rounded">Neatness - <span>B</span></p>
                        <p class="p-1 pl-2 border rounded">Neatness - <span>B</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-5 mt-3">
            <div>
                <p class="alert-success text-center py-1 m-0">Key To Psychomotor</p>
                <div class="row">
                    <div class="col mt-0">
                        <p class="p-1 pl-2 border rounded">A - Excellent</p>
                        <p class="p-1 pl-2 border rounded">A - Excellent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-around mt-3">
        <div class="col-11">
            <div>
                <p class="alert-success text-center m-0 col-12">Remarks/Comments</p>
                <div class="row justify-content-center">
                    <div class="col-12 mt-2">
                        <div class="row justify-content-center">
                            <p class="col-md-12"> <?= $sid[0]['remarks'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="v-25">
            <div class="mx-auto">
                <div class="col-md-4 offset-4">
                    <img class="ms-auto"
                        src="https://static.cdn.wisestamp.com/wp-content/uploads/2020/08/Thomas-Jefferson-autograph.svg-1024x637.png"
                        width="80%" height="40%" style="margin-bottom: -70px;">
                    <hr class="v-25">
                    <p class="text-center"> Principal's Signature </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>