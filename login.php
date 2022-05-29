<?php include 'includes/header.php' ?>

<?php 

    if(isset($_SESSION['user'])!="") {
        header("Location: index.php");
    }

// check whether form is submitted
if(isset($_POST['login'])) {
   $username = $_POST['username'];
   $password =  $_POST['password'];


   $result = mysqli_query($conn, "SELECT * FROM user WHERE user_uid = '$username' and user_pwd = '$password'");

   $matched = mysqli_num_rows($result);

   if($matched > 0) {
     $_SESSION['user'] = $username;

     // extract fee information using fee_id in user table 
    while ($row = mysqli_fetch_array($result)) {
            extract($row);
            $_SESSION['userLevel'] = $fee_id;
          }

     header("Location: index.php");


   } else {
    $errormsg = "Incorrect username or password, please try again";

   }
}
?>

<div class="container marketing">
  <div class="row">

    <section class="nine">
      <div class="background"></div>
      <div class="login-container">
         <h3>Login</h3>
          <form class="login-form" action="login.php" method="POST" autocomplete="off">

            <div class="form-item">
                <input type="text" name="username" id="text" placeholder="Username">
            </div>

            <div class="form-item">
                <input type="password" name="password" id="pass" placeholder="Password">
            </div>

            <button type="submit" name="login" > LOGIN </button>
            <p>New User? <a href="register.php">Create an account</a></p>
        </form>
        <span class="text_error"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
     </div>
    </section>
 </div>
</div>

<hr class="featurette-divider" />


<?php include 'includes/footer.php' ?>  