<?php include 'includes/header.php' ?>

<?php 
 // initialize error message for validation 
 $nameerr = $emailerr = $mobileerr = $messageerr = "";

 $name = $email = $mobile = $message = "";


// check the vadldation of each form 
// if post varaible is empty, store error message to each error variable
// otherwise, store the user input value into each variable.  
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    if(empty($_POST['name'])) {
        $nameerr = "Please enter your name";
     } else{
        $name = $_POST['name'];
     }

   if (empty($_POST['email'])) {
      $emailerr = "Please enter your Email";
    } else{
      $email = $_POST['email'];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
        $emailerr = "Invalid email format";  
      }  
    }

   if (empty($_POST['mobile'])) {
      $mobileerr = "Please enter your mobile number";
    } else{
      $mobile = $_POST['mobile'];
    if (!preg_match ("/^[0-9]*$/", $mobile) ) {  
        $mobileerr = "Only numeric value is allowed.";  
      }  
  //check mobile no length should not be less and greator than 10  
    if (strlen ($mobile) != 10) {  
        $mobileerr = "Phone number must contain 10 digits.";  
      }  
    }

    if(empty($_POST['message'])) {
        $messageerr = "Please enter message";
     } else{
        $message = $_POST['message'];
     }
}

?>

<div class="container marketing">
  <div class="row">


  <section class="elven">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/> 
          
            <!-- Container -->
            <div class ="contct">
                <h2 id="ff">Contact Us</h2>
              <!-- dummy div for spacing -->
                <div class="col-lg-4"> 

                <!-- feature-box containing the hedaer and para text-->
                 <div class="contact-info">
                    <div id="item">
                        <i class="icon fas fa-home"></i>
                        Dublin, Ireland
                    </div>
                    <div id="item">
                        <i class="icon fas fa-phone"></i>
                        +353872273339
                    </div>
                    <div id="item">
                        <i class="icon fas fa-envelope"></i>
                        swimridg@gmail.com
                    </div>
                    <div id="item">
                        <i class="icon fas fa-clock"></i>
                        Working hours from Mon-Fri  8:00 AM to 6:00 PM
                    </div>  
                </div>
               </div>  <!-- ./ col-lg-4-->

               <!-- dummy div for spacing -->
               <div class="col-lg-4"> 

               <!-- form -->
                <form action="contact_us.php" method = "POST" class="contact-form">

                      <!-- input -->
                       <input type="text" name = "name" class="textb" placeholder=" Your name">
                       <span class="error" ><?php echo $nameerr;?></span>
                       <!-- input -->
                       <input type="text" name = "email" class="textb" placeholder=" Your Email" >
                       <span class="error" ><?php echo $emailerr;?></span>
                         <!-- input -->
                       <input type="text" name = "mobile" class="textb" placeholder=" Mobile number" >
                       <span class="error" ><?php echo $mobileerr;?></span>
                       <!-- Textarea -->
                       <textarea name="message" placeholder="Your message"></textarea>
                       <span class="error" ><?php echo $messageerr;?></span>
                         <!-- input -->
                       <input type="submit" name="send" class="btns" value="Send" >
                </form>
              </div>  <!-- ./ col-lg-4--> 
            </div>

            <?php
              if(isset($_POST['send'])) {
                  if($nameerr == "" && $emailerr =="" && $mobileerr=="" && $messageerr == ""){
                      $sql = "INSERT INTO contact_us (contact_us_name, contact_us_email, contact_us_phone, contact_us_message) 
                      VALUES ('$name', '$email', '$mobile', '$message');"; 

                      $result = mysqli_query($conn, $sql);

                   // if query success, make message on the title
                   if($result) { 
                       echo 'Thank you for your contact with us!';
                    } else {
                    // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
                       echo 'Could not prepare statement!';
                    }

                   } else {
                       echo "<h3> <b> You should fill up properly  </b> </h3>";
                   }
              }
            ?>
        </section>
  </div> <!-- ./ row -->
</div> <!-- ./ container -->

<hr class="featurette-divider" />

<?php include 'includes/footer.php' ?>