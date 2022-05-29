<?php include 'includes/header.php' ?>

<!-- statment for populating contents from database -->
<?php 
  $query1 = "SELECT * FROM testimonial WHERE testimonial_id = 1;";
  $query2 = "SELECT * FROM testimonial WHERE testimonial_id = 2;";
  $query3 = "SELECT * FROM testimonial WHERE testimonial_id = 3;";

  $result1 = mysqli_query($conn, $query1);
  $result2 = mysqli_query($conn, $query2);
  $result3 = mysqli_query($conn, $query3);

?>

<!-- dummy div for spacing -->
<div class="space">

 <!-- bootstrap carousel container for slide to show three testimonials -->
 <div class="container marketing">
   <h2> TESTIMONIALS </h2>

  <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <img class="bg-img" src="images/tm1.jpeg" alt="pool">  
              <rect width="100%" height="100%" fill="#777" />
            </svg>

            <div class="container">
              <div class="carousel-caption text-start">
                <?php
                   // save the first testimonial data into array and display
                   while($row = mysqli_fetch_array($result1)) {
                     extract($row);
                     echo "<p> $testimonial_comment</p>";
                     echo "<p testimonail_firstname> - $testimonial_userFirstname </p>";
                   }
                ?>
                <p>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <img class="bg-img" src="images/tm2.jpeg" alt="pool"> 
              <rect width="100%" height="100%" fill="#777" />
            </svg>

            <div class="container">
              <div class="carousel-caption">
                <?php
                   // save the second testimonial data into array and display
                   while($row = mysqli_fetch_array($result2)) {
                     extract($row);
                     echo "<p> $testimonial_comment</p>";
                     echo "<p testimonail_firstname> - $testimonial_userFirstname </p>";
                   }
                 ?>
                <p></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <img class="bg-img" src="images/tm3.jpeg" alt="pool"> 
              <rect width="100%" height="100%" fill="#777" />
            </svg>

            <div class="container">
              <div class="carousel-caption text-end">
              <?php
                   // save the third testimonial data into array and display
                   while($row = mysqli_fetch_array($result3)) {
                     extract($row);
                     echo "<p> $testimonial_comment</p>";
                     echo "<p testimonail_firstname> - $testimonial_userFirstname </p>";
                   }
                ?>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

   </div>  

</div>  

<hr class="featurette-divider" />


<?php include 'includes/footer.php' ?>