<?php 
      // function for data security
      function inputTest($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $firsterr = $lasterr = $gendererr = $doberr = $emailerr = $phoneerr
      = $addresserr = $eircodeerr = $uiderr = $pwderr = $pwdConfirmerr = "";

      $first = $last =  $gender = $dob = $email = $phone = $address = $eircode = $uid = $pwd = "";
      

      // check the vadldation of each form 
      // if post varaible is empty, store error message to each error variable
      // otherwise, store the user input value into each variable.  
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['first'])) {
          $firsterr = "First name is required";
        } else{
          $first = inputTest($_POST['first']);
        }

        if (empty($_POST['last'])) {
          $lasterr = "Last name is required";
        } else{
          $last = inputTest($_POST['last']);
        }

        if (empty($_POST['gender'])) {
          $gendererr = "Gender is required";
        } else{
          $gender = inputTest($_POST['gender']);
        }

        if (empty($_POST['dob'])) {
          $doberr = "Date of birth is required";
        } else{
          $dob = inputTest($_POST['dob']);
        }

        if (empty($_POST['email'])) {
          $emailerr = "Email is required";
        } else{
          $email = inputTest($_POST['email']);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            $emailerr = "Invalid email format";  
        }  
        }

        if (empty($_POST['phone'])) {
          $phoneerr = "Phone number is required";
        } else{
          $phone = inputTest($_POST['phone']);
          if (!preg_match ("/^[0-9]*$/", $phone) ) {  
            $phoneerr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
          if (strlen ($phone) != 10) {  
            $phoneerr = "Phone number must contain 10 digits.";  
            }  
        }

        if (empty($_POST['address'])) {
          $addresserr = "Address is required";
        } else{
          $address = inputTest($_POST['address']);
        }

        if (empty($_POST['eircode'])) {
          $eircodeerr = "Eircode is required";
        } else{
          $eircode = inputTest($_POST['eircode']);
        }

        if (empty($_POST['uid'])) {
          $uiderr = "Username is required";
        } else{
          $uid = inputTest($_POST['uid']);
        }

        if (empty($_POST['pwd'])) {
          $pwderr = "Password is required";
        } else{
          $pwd = inputTest($_POST['pwd']);
        }

        if (empty($_POST['pwdConfirm'])) {
          $pwdConfirmerr = "Confirm password is required";
        }elseif ( $_POST['pwd'] !== $_POST['pwdConfirm']){
          $pwdConfirmerr = "Confirm password is not match with password";
        } 
        else{
          $pwdConfirm = inputTest($_POST['pwdConfirm']);
        }
       // $fee = inputTest($_post['fee']);
      }
    ?>

<?php include 'includes/header.php' ?>

<div class="container marketing">
<div class= "signup-header">
  <h2>Registration </h2>
</div>
<section class="twelve">   
   <div class="row">
   <div class="signup-container">
     
     <div class="signup-row">
       <!-- query to display regarded contents of product from fee table -->
       <?php
       // Get method to take id from register page link 
       $fee_id = $_GET['id'];

       // query to take out contents from fee table
       $query = "SELECT * FROM fee WHERE fee_id = '$fee_id';";
       $result = mysqli_query($conn, $query);

       // fetch data into array and display by extracting it
       while($row = mysqli_fetch_array($result)) {
         extract($row);
         echo "<h2> $fee_title </h2>";
         echo "<p> € $fee_price </p>";
         echo "<p> $fee_benefit </p>";
       }

      ?>
      </div>
    </div> <!-- ./ signup-container --> 
   </div> <!-- ./row -->

<div class="signup-container">   
<div class="row">
   <h3>Registration Form</h3>
</div>  

<form method="post" action="" autocomplete="off">
  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="first" class="signup-label"> Firstname </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="text" id="fname" name="first" placeholder="Firstname" >
      <span class="error"><?php echo $firsterr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="last" class="signup-label"> Lastname </label>
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="text" id="lname" name="last" placeholder="Lastname" >
      <span class="error"><?php echo $lasterr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->   

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="gender" class="signup-label"  >Gender </label>
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="radio" name="gender" id="male" value="m" >
            <label for="male" class="signup-label" >Male</label>
            <input class="signup-input" type="radio" name="gender" id="female" value="f" >
            <label for="female" class="signup-label">Female</label>
            <span class="error"><?php echo $gendererr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="dob" class="signup-label">Date of Birth </label>
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="date" id="dob" name="dob" placeholder="Dateofbirth" value="2003-12-17" max="2003-12-17">
      <span class="error"><?php echo $doberr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label -->
      <label for="email" class="signup-label"> E-mail </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="text" id="email" name="email" placeholder="E-mail" >
      <span class="error"><?php echo $emailerr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->  

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label -->
      <label for="phone" class="signup-label">Phone number </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="text" id="mobile" name="phone" placeholder="086123456" value="">
            <span class="error"><?php echo $phoneerr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 
  
  <div class="row">
    <div class="col-lg-4"> 
      <!-- label -->
      <label for="address" class="signup-label">Address </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="text" name="address" id="address" placeholder="Mill Street, Dublin 8, Dublin" value="">
      <span class="error"><?php echo $addresserr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->
  
  <div class="row">
    <div class="col-lg-4"> 
      <!-- label -->
      <label for="eircode" class="signup-label">Eircode </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="text" id="eircode" name="eircode" placeholder="D00 H08R" value="" maxlength="10">
            <span class="error"><?php echo $eircodeerr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label -->
      <label for="uid" class="signup-label"> Username </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="text" name="uid" placeholder="Username" >
      <span class="error"><?php echo $uiderr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label -->
      <label for="pwd" class="signup-label"> Password </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="password" id="password" name="pwd" placeholder="Password" maxlength="8">
      <span class="error"><?php echo $pwderr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label -->
      <label for="pwdConfirm" class="signup-label"> Confirm Password </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="signup-input" type="password" id="confirmpassword" name="pwdConfirm" placeholder="Confirm Password" maxlength="8">
      <span class="error"><?php echo $pwdConfirmerr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row -->

  <div class="row">
  <div class="signup-row right1">
      <button class="signup-input" id="btn1" type="submit" name="signup"> Sign up </button>
      </div>
  </div> <!-- ./ row -->

</form>
</div> <!-- signup container--> 
</section>

<?php  

    if(isset($_POST['signup'])) {  
      if($firsterr == "" && $lasterr == "" && $gendererr == "" && $doberr == "" && $emailerr == "" && $phoneerr
          == "" && $addresserr == "" && $eircodeerr == "" && $uiderr == "" && $pwderr == "" && $pwdConfirmerr == "") {  

            // prepare sql and bind parameters
            if ($stmt = $conn->prepare('SELECT user_id, user_pwd FROM user WHERE user_uid = ?')) {
              // Bind parameters.
              $stmt->bind_param('s', $_POST['uid']);
              $stmt->execute();
              $stmt->store_result();
              // Store the result so we can check if the account exists in the database.
              if ($stmt->num_rows > 0) {
                // if Username already exists display message
                echo 'Username exists, please try another';
              } else {
                // insert new account
                $sql = "INSERT INTO user (user_first, user_last, user_gender, user_dob, user_email, user_phone, user_address, user_eircode, user_uid, user_pwd, fee_id)
                        VALUES ('$first', '$last', '$gender', '$dob', '$email', '$phone', '$address', '$eircode', '$uid', '$pwd', '$fee_id');";
      
                $result = mysqli_query($conn, $sql);

                // if query success, make message on the title
                if($result) {  
                  echo 'You have successfully registered, you can now login';
                } else {
                  // if something is wrong with the sql statement, display error message
                  echo 'Could not prepare statement';
                }
              }
              $stmt->close();
            } else {
              // if something is wrong with the sql statement, display error message
              echo 'Could not prepare statement';
            }
      } else {  
      echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
      }  
    } 
    ?>  

</div>  <!--./ container--> 

<hr class="featurette-divider" />



<?php include 'includes/footer.php' ?>