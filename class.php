<?php include 'includes/header.php' ?>

<!-- dummy div for spacing -->
<div class="space">
<!-- bootstrap carousel container total 4 rows for this page --> 
 <div class="container marketing" id="container_class">
  <!-- first class section --> 
  <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">
              Freestyle/Front Crawl Class
              <span class="text-muted">Basic, but powerful.</span>
            </h2>
            <p class="lead">
               <!-- if user logged in, linking to regarded class detail page, otherwise link to login page -->
               <a class="btn btn-secondary" href="<?php if(isset($_SESSION['user'])){ echo 'class_details.php?id=1';}  else { echo 'login.php';}?>">View details &raquo;</a>
            </p>
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
              <image xlink:href="images/1.jpeg"
                 x="0" y="0" height="500px" width="500px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>

        <hr class="featurette-divider" />

        <!-- second class section --> 
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">
              Breaststroke Class
              <span class="text-muted"> Efficient and competitive. </span>
            </h2>
            <p class="lead">
              <!-- if user logged in, linking to regarded class detail page, otherwise link to login page -->
              <a class="btn btn-secondary" href="<?php if(isset($_SESSION['user'])){ echo 'class_details.php?id=2';}  else { echo 'login.php';}?>">View details &raquo;</a>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
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
              <image xlink:href="images/2.jpeg"
                 x="0" y="0" height="500px" width="500px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>

        <hr class="featurette-divider" />
        
        <!-- third class section --> 
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">
              Butterfly Class 
              <span class="text-muted"> Challenging for your skill. </span>
            </h2>
            <p class="lead">
               <!-- if user logged in, linking to regarded class detail page, otherwise link to login page -->
               <a class="btn btn-secondary" href="<?php if(isset($_SESSION['user'])){ echo 'class_details.php?id=3';}  else { echo 'login.php';}?>">View details &raquo;</a>
            </p>
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
              <image xlink:href="images/3.jpeg"
                 x="0" y="0" height="500px" width="500px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>

        <hr class="featurette-divider" />

        <!-- fourth class section --> 
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">
               Sidestroke Class
              <span class="text-muted"> For safety. </span>
            </h2>
            <p class="lead">
              <!-- if user logged in, linking to regarded class detail page, otherwise link to login page -->
               <a class="btn btn-secondary" href="<?php if(isset($_SESSION['user'])){ echo 'class_details.php?id=4';}  else { echo 'login.php';}?>">View details &raquo;</a>
            </p>
          </div>
        <div class="col-md-5 order-md-1">
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
          <image xlink:href="images/4.jpeg"
              x="0" y="0" height="500px" width="500px" preserveAspectRatio="none"/>
         <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
      </svg>
     </div>
   </div>

  </div> <!-- ./ container -->
 </div> <!--./ space -->

<hr class="featurette-divider" />


<?php include 'includes/footer.php' ?>