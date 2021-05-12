<!-- Page Container START -->
<div class="page-container">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.css'>

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-icon avatar-lg avatar-blue">
                                <i class="anticon anticon-dollar"></i>
                            </div>
                            <div class="m-l-15">
                                <h2 class="m-b-0"> Total Staffs </h2>
                                <p class="m-b-0 text-muted"><?php echo date('Y-m-d') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                <i class="anticon anticon-line-chart"></i>
                            </div>
                            <div class="m-l-15">
                                <h2 class="m-b-0">Today's Date</h2>
                                <p class="m-b-0 text-muted"><?php echo date('F j, Y') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="calendarFull"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form name="save-event" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Event start</label>
                            <input type="text" name="evtStart" class="form-control col-xs-3" />
                        </div>
                        <div class="form-group">
                            <label>Event end</label>
                            <input type="text" name="evtEnd" class="form-control col-xs-3" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js'></script>
