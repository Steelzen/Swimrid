<?php include 'includes/header.php' ?>

<main>
    <!-- bootstrap carousel template setting -->
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
              <img class="bg-img" src="https://wallpaperaccess.com/full/2604791.jpg" alt="pool">  
              <rect width="100%" height="100%" fill="#777" />
            </svg>

            <!-- first headline in index page which has site name and mention -->
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Swimrid</h1>
                <p>
                  I wouldn't say anything is impossible. I think that everything is possible <br> as long as you put your mind to it and put the work and time into it.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="register.php">Sign up now</a>
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
              <img class="bg-img" src="https://wallpaperaccess.com/full/2604791.jpg" alt="pool"> 
              <rect width="100%" height="100%" fill="#777" />
            </svg>

            <!-- second head line -->
            <div class="container">
              <div class="carousel-caption">
                <h1>Everything about swimming</h1>
                <p>
                  We offer you best quality swimming contents.
                </p>
                <p><a class="btn btn-lg btn-primary" href="class.php">Learn more</a></p>
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
              <img class="bg-img" src="https://wallpaperaccess.com/full/2604791.jpg" alt="pool"> 
              <rect width="100%" height="100%" fill="#777" />
            </svg>

            <!-- third head line -->
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Challenge partner</h1>
                <p>
                  Challenge your limitation with Swimrid.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="testimonial.php">Sounds of members</a>
                </p>
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

      <!-- Marketing messaging and featurettes
  ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <svg
              class="bd-placeholder-img rounded-circle"
              width="140"
              height="140"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: 140x140"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777"/>
              <image xlink:href="images/1.jpeg"
                 x="0" y="0" hegiht="140px", width="140px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#777" dy=".3em"></text>
            </svg>

            <!-- brief summary of first class and link button -->
            <h2>Freestyle/Front Crawl Class</h2>
            <p>
              The front crawl is likely the first swimming stroke you think of when you picture swimming.
            </p>
            <p>
              <!-- if the user loged in connect to class detail page directly, else prompt the user to login -->
              <a class="btn btn-secondary" href="<?php if(isset($_SESSION['user'])){ echo 'class_details.php?id=1';}  else { echo 'login.php';}?>">View details &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg
              class="bd-placeholder-img rounded-circle"
              width="140"
              height="140"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: 140x140"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />
              <image xlink:href="images/2.jpeg"
                 x="0" y="0" hegiht="140px", width="140px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#777" dy=".3em"></text>
            </svg>

            <!-- brief summary of second class and link button -->
            <h2>Breaststroke Class</h2>
            <p>
              The breaststroke is the slowest competitive swimming stroke, and it is the most commonly learned stroke.
            </p>
            <p>
              <!-- if the user loged in connect to class detail page directly, else prompt the user to login -->
              <a class="btn btn-secondary" href="<?php if(isset($_SESSION['user'])){ echo 'class_details.php?id=2';}  else { echo 'login.php';}?>">View details &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg
              class="bd-placeholder-img rounded-circle"
              width="140"
              height="140"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: 140x140"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />
              <image xlink:href="images/3.jpeg"
                 x="0" y="0" hegiht="140px", width="140px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#777" dy=".3em"></text>
            </svg>

            <!-- brief summary of third class and link button -->
            <h2>Butterfly Class</h2>
            <p>
              The butterfly is an advanced swimming stroke that provides an excellent workout. It can be more difficult and tiring to learn, but it is also a lot of fun. 
            </p>
            <p>
              <!-- if the user loged in connect to class detail page directly, else prompt the user to login -->
              <a class="btn btn-secondary" href="<?php if(isset($_SESSION['user'])){ echo 'class_details.php?id=3';}  else { echo 'login.php';}?>">View details &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider" />

        <!-- populate feature box regarding user-level otherwise display message for public-->
        <div class="row featurette">
          <div class="col-md-7">  
          <?php if(isset($_SESSION['user'])) { ?>
            <h2 class="featurette-heading">
                <?php echo "Hi, ".$_SESSION['user']; ?>  
              <span class="text-muted"><?php echo $page_title; ?> </span>
            </h2>
            <p class="lead">
              <?php echo $page_content; ?>
            </p>
            <?php } else { ?> 
              <h2 class="featurette-heading">
              Hi, 
              <span class="text-muted">Nice to meet you</span>
            </h2>
            <p class="lead">
              Please join us as an amazing member.
              <br>
              <a class="btn btn-lg btn-primary" href="register.php">Register now</a>
            </p>
            <?php } ?>
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
              <image xlink:href="images/swimmingPool.jpeg"
                 x="0" y="0" height="500px" width="500px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>

        <hr class="featurette-divider" />

        <!-- Event contents -->
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">
              2021 Irish SC Championships.
              <span class="text-muted"> Test your skill. </span>
            </h2>
            <p class="lead">
            The Irish SC Championships will take place at the Sport Ireland National Aquatic Centre in Dublin from December 16 to 18.<br> 
            Considering the current case numbers, and with the health and safety of all attending the competition a priority, we have taken the decision to not allow spectators at this event.<br>
            For 2021, to allow for the fact a large number of athletes have not had the opportunity to race, the qualification period is from 1st July 2019. Published times are Consideration Times rather than Qualifying Times as heats may need to be limited to manage session timelines.<br>  
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
              <image xlink:href="images/event.jpg"
                 x="0" y="0" height="500px" width="500px" preserveAspectRatio="none"/>
              <text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
          </div>
        </div>

        <hr class="featurette-divider" />

        <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.container -->
      </main>



<?php include 'includes/footer.php' ?>