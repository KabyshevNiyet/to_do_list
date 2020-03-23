<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('html/head.php');
    if($_SESSION['role_id'] != 1){
        header("Location: errors/error403.php");
    }
    ?>
    <title>Сотрудники</title>
</head>

<body class="nav-md">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <?php include_once('html/header.php');?>
        <!-- END HEADER DESKTOP-->
        <!-- HEADER MOBILE-->
        <?php include_once('html/mobile.php');?>
        <!-- END HEADER MOBILE-->
        <!-- DATA BASE-->
        <?php include_once('db/db.php');?>
        <!-- END DATA BASE-->
        

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- DATA TABLE-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <h3 class="title-4">Таблица поьзователей</h3>
                            <div class="pull-right mb-2">
                                <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#scrollmodal">Добавить пользователя</button>
                            </div>
                            <div class="table-responsive table--no-card ">
                                <table id="datatable-buttons" class="table table-bordered table-striped table-earning shadow">
                                    <thead class="">
                                        <tr>
                                        <th>ID</th>
                                        <th>Фамилия</th>
                                        <th>Имя</th>
                                        <th>Дата рождния</th>
                                        <th>Email</th>
                                        <th>Пароль</th>
                                        <th>Edit</th>
                                        </tr>
                                    </thead>

                                    <tbody class="">
                                        <?php selectDataUser(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END DATA TABLE-->

        </div>

        <?php include_once('user/addUserAdmin.php')?>

    </div>
    <!-- FOOTER-->
    <?php include_once('html/footer.php')?>    
    <!-- END FOOTER-->

    <?php include_once('html/scripts.php'); ?>

<!-- DATATABLE-->
<script src="../vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendor/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendor/jszip/dist/jszip.min.js"></script>
<script src="../vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="../build/js/custom.min.js">   
</script>
<!-- END DATATABLE-->

</body>

</html>
<!-- end document-->
