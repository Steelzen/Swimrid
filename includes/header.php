<?php
    // make session 
    session_start();

    // make connection to database
    include 'includes/connect.php';
?>

<!-- using bootstrap template carousel for overall webpage-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Index Page</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/carousel/"
    />


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- CSS style sheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>
    <!-- bootstrap carousel template nav bar -->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Swimrid</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" >HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="class.php">CLASSES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" a href="testimonial.php">TESTIMONIAL</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" a href="contact_us.php">CONTACT US</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" a href="about_us.php">ABOUT US</a>
              </li>
              
              <!-- show this menu for login user -->
              <?php if(isset($_SESSION['user'])) { ?>
                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" a href="testimonial_add.php"> GIVE OPINIONS </a>
                   </li>

                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" a href="logout.php">LOGOUT </a>
                   </li>

                   <li class="nav-item">
                     <p class="text-success">Welcome <?php echo $_SESSION['user'];?></p>
                   </li>

                <?php } else { ?>  
                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" a href="register.php">REGISTER </a>
                   </li>

                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" a href="login.php">LOGIN </a>
                   </li>
                   
                <?php } ?>

                <!-- only for admin below menu will be seen -->
                <?php if($_SESSION['user'] == "admin") { ?>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" a href="edit.php">  CONTENT MANAGEMENT </a>
                    </li>
                 <?php } ?>
            </ul>

            </form>
          </div>
        </div>
      </nav>
    </header>
      
      <!-- query for pages to populate feature box--> 
      <?php 
        $user = $_SESSION['user'];

        $queryForFee = "SELECT fee_id FROM user WHERE user_uid = '$user';";
        $resultForFee = mysqli_query($conn, $queryForFee);

        // extract $fee_id
        while($row = mysqli_fetch_array($resultForFee)) {
          extract($row);
        }

        $queryForPage = "SELECT * FROM page WHERE page_id = $fee_id;";
        $resultForPage = mysqli_query($conn, $queryForPage);
        
        // extract $page_title, $page_content
        while($row = mysqli_fetch_array($resultForPage)) {
          extract($row);
        }

      ?> 