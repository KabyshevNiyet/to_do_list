<!DOCTYPE html>
<html>
<head>
    <?php include_once('html/head.php');?>
     <!-- FullCalendar -->
    <link href='../vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />
    <title>Табель</title>

</head>
<body>
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <?php include_once('html/header.php');?>
        <!-- END HEADER DESKTOP-->
        <!-- HEADER MOBILE-->
        <?php include_once('html/mobile.php');?>
        <!-- END HEADER MOBILE-->
        <?php include_once('db/db.php');?>
        
        
        <section class="content mt-4 m-3">
            <!-- MAIN CONTENT-->
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title-4">To  Do List For <?php echo $_SESSION['user']; ?></h3> <br>
                    <div class="box rounded bg-white">
                        <div class="table-responsive table--no-card ">
                                <table id="datatable" class="table table-bordered table-striped table-earning shadow">
                                    <thead class="">
                                        <tr>
                                        <th>Title</th>
                                        <th>Importance</th>
                                        <th>Status</th>
                                        <th></th>
                                    </thead>

                                    <tbody class="">
                                        <form action="" method="post">
                                        <?php selectCalendar();?>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                    </div>             
                </div>
                <div class="col-md-6">
                      <div class="au-card">
                        <div id="calendar"></div>
                      </div>
                </div>
            </div>
        </section>      
        


    </div>
    <?php include_once('calendar/addEvent.php')?>    

    <?php include_once('html/footer.php')?>    
    <!-- END FOOTER-->

    <?php include_once('html/scripts.php')?>    
    
    <!-- full calendar requires moment along jquery which is included above -->
    <script src="../vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="../vendor/fullcalendar-3.10.0/fullcalendar.js"></script>





</body>
</html>