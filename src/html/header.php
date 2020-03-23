<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="calendar.php"><h3 class="logo-lg text-light">ToDoList</h3></a>
            </div>
            <?php if($_SESSION["role_id"] == 1){ ?>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <li class="has-sub pull-right">
                        <a href="index.php">
                            <i class="fas fa-user"></i>Сотрудники
                            <span class="bot-line"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <?php }?>
            
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['user']; ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="../images/icon/avatar-06.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $_SESSION['user'];?></a>
                                    </h5>
                                    <span class="email"><?php echo $_SESSION['email'];?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="profile.php">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="db/sessionDelete.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>