<?php include 'includes/header.php' ?>

<?php
   // declare initial varaible for error message and content
   $classerr = $commenterr = "";

   $classname = $comment = "";


   // check validation of form 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       if(empty($_POST['classname'])) {
           $classerr = "Please enter the class name";
       } else {
           $classname = $_POST['classname'];
       }

       if(empty($_POST['comment'])) {
        $commenterr = "Please enter your opinion";
       } else {
        $comment = $_POST['comment'];
    }
   }
   
   // varaible for containing current date
   $date = date('d-m-Y', time());
?>

<!-- Container --> 
<div class="container marketing">
  <div class="row">
  <div class= "Useropinion-header">
    <h2>USER OPINION</h2>
    <h4>Give us your precious opinion </h4>
  </div>
  <section class="fourteen">
    <div class="user-container">
        <h3>OPINION FORM</h3>

    <form class="testimonial-form" method="post" action= "testimonial_add.php">

    <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="classname" class="user-label"> Date </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <?php echo "<p id='date'> $date <p>" ?>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="classname" class="user-label"> Classname </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class="user-input" type="text" id="Cname" name="classname" placeholder="Classname" >
      <span class="error"><?php echo $classerr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="class-comment" class="user-label"> Comments </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <textarea class="user-textarea" name="comment" placeholder="Your Comment"></textarea>
      <span class="error"><?php echo $commenterr;?></span>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
  <div class="user-row right1">
      <button class="user-input" id="btn123" type="submit" name="submit"> Submit </button>
  </div>
  </div> <!-- ./ row -->

  </form>
  </div>  

  
  <?php
      // if user is logged in, take out user first name from user table about user
      if(isset($_SESSION['user'])) {
          $userID = $_SESSION['user']; 
          $query = "SELECT user_first FROM user WHERE user_uid = '$userID';";
      }

      $result = mysqli_query($conn, $query);

      // declare user first name variable using fetch array
      while($row = mysqli_fetch_array($result)){
            extract($row);
            $_SESSION['name'] = $user_first;
        }
            
  ?>

  <?php
      // if form submit button clicked
      if(isset($_POST['submit'])) {
          if($classerr == "" && $commenterr=="") {
              $sql =  "INSERT INTO testimonial (testimonial_date, testimonial_userFirstname, testimonial_classname, testimonial_comment)
                       VALUES ('$date', '$user_first', '$classname', '$comment');"; 

              $result = mysqli_query($conn, $sql);

              // if query success, make message on the title
              if($result) {  
                  echo 'Thank you for your opinion!';
              } else {
              // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
                echo 'Could not prepare statement!';
              }

              } else {
                echo "<h4> <b> You should fill up properly  </b> </h4>";
              }
            }
    ?>
</section>


  </div> <!-- ./ row -->
</div> <!-- ./ container -->

<hr class="featurette-divider" />


<?php include 'includes/footer.php' ?>