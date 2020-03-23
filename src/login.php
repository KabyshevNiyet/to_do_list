<!DOCTYPE html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <title>Вход в систему</title>
</head>
    
<body>
    <div>
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h1>ToDoList</h1>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="db/db.php" method="post">
                                <div class="form-group">
                                    <label>Логин</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Введите логин" required>
                                </div>
                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Введите пароль" required>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="checkLogin">Вход</button>
                                <div class="bottom-container">
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="au-btn au-btn--block au-btn--blue text-center" data-toggle="modal" data-target="#scrollmodal">Регистрация</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="au-btn au-btn--block au-btn--blue text-center" data-toggle="modal" data-target="#passwordModal">Забыли пароль?</button>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                2 modals for registration and password
                                -->
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('user/registration.php')?>
        <?php include_once('user/passwordModal.php')?>
        
    </div>

   <?php include_once('html/scripts.php');?>

</body>

</html>
<!-- end document-->