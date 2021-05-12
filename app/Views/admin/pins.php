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
                    <button type="button" class="btn btn-lg btn-default print_no"
                        onclick="print_this('printa')">Print!</button>
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
        <div class="row" id="printa">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body m-5">
                        <?php if(isset($result)): ?>
                        <div class="row">
                            <?php foreach($result as $r): ?>
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <div class="table">
                                        <table>
                                            <thead>
                                                <th>PIN</th>
                                                <th>Serial No</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?= $r['pin'] ?></td>
                                                    <td><?= $r['serial'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->
    <script>
    window.print_this = function(id) {
        var prtContent = document.getElementById(id);
        var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');

        WinPrint.document.write(
            '<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/app.min.css') ?>">'
            );

        // To keep styling
        /*var file = WinPrint.document.createElement("link");
        file.setAttribute("rel", "stylesheet");
        file.setAttribute("type", "text/css");
        file.setAttribute("href", 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        WinPrint.document.head.appendChild(file);*/


        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.setTimeout(function() {
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
    }
    </script>