<?php
session_start();
include_once 'dbconnect.php';
include_once 'common.php';

if(isset($_SESSION['userSession'])!="")
{
 header("Location: home.php");
 exit;
}

if(isset($_POST['btn-login']))
{
 $username = $MySQLi_CON->real_escape_string(trim($_POST['username']));
 $upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));
 
 $query = $MySQLi_CON->query("SELECT * FROM users WHERE user_name='$username'");
 $row=$query->fetch_array();
 
 if(password_verify($upass, $row['user_pass']))
 {
  $_SESSION['userSession'] = $row['user_id'];
  header("Location: home.php");
 }
 else
 {
  $msg = "
        email or password does not exists !
    ";
 }
 
 $MySQLi_CON->close();
 
}
?>
<?php
include_once 'header.php';
?>
<div class="signin-form">

 <div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading"><?php echo $lang['SIGN_IN']; ?></h2><hr />
        
        <?php
  if(isset($msg)){
   echo $msg;
  }
  ?>
        
        <div class="form-group">
        <input type="username" class="form-control" placeholder="<?php echo $lang['USERNAME']; ?>" name="username" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="<?php echo $lang['PASSWORD']; ?>" name="password" required />
        </div>
       
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; <?php echo $lang['SIGN_IN']; ?>
   </button> 
            
            <a href="forgot.php" class="btn btn-default" style="float:right;"><?php echo $lang['FORGOT']; ?></a>
            
        </div>  
      </form>
    </div>
</div>

<?php
include_once 'footer.php';
?>
