<?php include 'includes/header.php' ?>


<!-- container -->
<div class="container marketing"> 

     <!-- register heading with header text h2 -->
   <div class= "register-header">
            <h2>REGISTER</h2>
   </div>

   <!-- container-box -->
   <div class="row">

   <!-- feature-box1 -->
     <div class="col-lg-4">
     <section class="eight">
               <!-- plan description in header text -->
                <div class="price-chart"></div>
                <div class="price-header">
                    <h3 class="price-title">Standard Plan</h3>
                    <h4 class="price-summary">For Beginners</h4>
                </div>
                <!-- plan ad price description in unordered list -->
                <div class="price-description">
                    <ul class="price-list">
                        <li class="price-feature">Basic freestyle course</li>
                        <li class="price-feature">24 / 7 Pool Access</li>
                        <li class="price-feature">Parking Access</li>
                    </ul>
                </div>
                <!-- plan price in para text-->
                <div class="price-action">
                    <p class="price-cost">€30</p>
                    <p class="price-text">per month</p>
                    <?php
                    // link to sign up page with mark id to be displayed regarding product 
                    echo '<a href="sign_up.php?id=1" class="price-button">Purchase </a>';
                    ?>
                    <p class="price-text">Minimum spend €320 over 12 month</p>
                </div>
            </section>

     </div>
     <!-- /.col-lg-4 -->


  <!-- feature-box2 -->
     <div class="col-lg-4">
         <!-- plan description in header text -->
       <section class="eight pricing-highlight">
                    <div class="price-recommend">Recommened</div>
                    <div class="price-header">
                        <h3 class="price-title">Deluxe Plan</h3>
                        <h4 class="price-summary">For Intermediates</h4>
                    </div>

                    <!-- plan ad price description in unordered list -->
                    <div class="price-description">
                        <ul class="price-list">
                            <li class="price-feature">Three swimming courses </li>
                            <li class="price-feature">24 / 7 Pool Access</li>
                            <li class="price-feature">Parking Access</li>
                        </ul>
                    </div>
                    <!-- plan price in para text-->
                    <div class="price-action">
                        <p class="price-cost">€60</p>
                        <p class="price-text">per month</p>
                        <?php
                        // link to sign up page with mark id to be displayed regarding product 
                        echo '<a href="sign_up.php?id=2" class="price-button">Purchase </a>';
                        ?>
                        <p class="price-text">Minimum spend €700 over 12 month</p>
                    </div>
                </section>
      </div>
     <!-- /.col-lg-4 -->

     <!-- feature-box3 -->
     <div class="col-lg-4">
          <!-- plan description in header text -->
       <section class="eight">
                        <div class="price-header">
                            <h3 class="price-title">Premium Plan</h3>
                            <h4 class="price-summary">For Advanced</h4>
                        </div>

                        <!-- plan ad price description in unordered list -->
                        <div class="price-description">
                            <ul class="price-list">
                                <li class="price-feature">All Swimrid swimming courses </li>
                                <li class="price-feature">24 / 7 Pool Access</li>
                                <li class="price-feature">Parking Access</li>
                            </ul>
                        </div>

                         <!-- plan price in para text-->
                        <div class="price-action">
                            <p class="price-cost">€90</p>
                            <p class="price-text">per month</p>
                            <?php
                            // link to sign up page with mark id to be displayed regarding product 
                            echo '<a href="sign_up.php?id=3" class="price-button">Purchase </a>';
                            ?>
                            <p class="price-text">Minimum spend €1000 over 12 month</p>
                        </div>
                    </section>
 

      </div>
      <!-- /.col-lg-4 -->          

                
   </div>
   <!-- /.row -->
</div>
<!-- container-->

<hr class="featurette-divider" />

<?php include 'includes/footer.php' ?>