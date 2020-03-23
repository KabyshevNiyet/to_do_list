<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once('html/head.php');?>
  <title>Профиль</title>
</head>
<body class="nav-md">
 
  <div class="">
  <!-- HEADER DESKTOP-->
  <?php include_once('html/header.php');?>
  <!-- END HEADER DESKTOP-->
  <!-- HEADER MOBILE-->
  <?php include_once('html/mobile.php');?>
  <!-- END HEADER MOBILE-->
  <!-- DATA BASE-->
  <?php include_once('db/db.php');?>
  <!-- END DATA BASE-->

  <div class="container">
    <br>
    <h2><?php echo $_SESSION['user']." - ".$_SESSION['role']?></h2>
    <hr>
    <div class="row">
    
      <div class="card" style="width:400px">
        <img class="card-img-top" src="../images/icon/avatar-big-01.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title"><?php echo $_SESSION['user'].'/'.$_SESSION['birthdate']?></h4>
          <h5 class="card-title"><?php echo $_SESSION['email']?></h5>
          
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
        </div>
      </div>

      <div class="col-6">
        <h3 class="card-title">Change password</h3><br>
        <form action="" method="post">
          <div class="row form-group">
            <div class="col col-md-12">
                <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                </div>
                <input type="password" name="password" placeholder="New password" class="form-control" required>
                </div>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-12">
                <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                </div>
                <input type="password" name="passwords" placeholder="Confirm password" class="form-control" required>
                </div>
            </div>
          </div>
          <input type="submit" name="changePassword" class="btn btn-primary pull-right" value="Change">
        </form>
      </div>
    
    </div>

  </div>
  
  </div>
    
  <?php include_once('html/scripts.php'); ?>
</body>
</html>
