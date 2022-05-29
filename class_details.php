<?php include 'includes/header.php' ?>
<!-- dummy div for spacing -->
<div class="space">
 <div class="container marketing">
  <div class="row featurette">
          <div class="col-md-7">
          <!-- query for linking into proper content-->  
          <?php
          // Get method to take id from class page link 
          $class_id = $_GET['id'];
 
          // query to take out contents from class table
          $query = "SELECT * FROM class WHERE class_id = '$class_id';";
          $result = mysqli_query($conn, $query);

          // fetch data into array and display by extracting it
          while($row = mysqli_fetch_array($result)){
              extract($row);
              echo "<h2 class='featurette-heading'> $class_name </h2>";
              echo "<p class='lead'> $class_detail </p>";
              }
          ?>
          </div>

          <div class="col-md-5">
            <svg
              class="
                bd-placeholder-img bd-placeholder-img-lg
                featurette-image
                img-fluid
                mx-auto
              "
              width="500"
              height="500"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: 500x500"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#eee" />
              <image xlink:href="images/<?php echo $class_id?>.jpeg"
                 x="0" y="0" height="500px" width="500px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>
   </div> <!-- ./ container -->
</div>

<hr class="featurette-divider" />


<?php include 'includes/footer.php' ?>