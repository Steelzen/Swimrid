<?php include 'includes/header.php' ?>


<?php 
   // statement to get relevant marked up contents in edit page
  if($_GET['id']) {
	$id = $_GET['id'];

    // Select a data marked up in edit page
	$sql = "SELECT * FROM fee WHERE fee_id = {$id}";
	$result = $conn->query($sql);

    // fetch query result to array 
	$data = $result->fetch_assoc();

	$conn->close();
?>


<!-- Container --> 
<div class="container marketing">
  <div class="row">
  <section class="fourteen">
    <div class="user-container">
        <h3>Fee details edit</h3>

<form action="registration_update.php" method="post">

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="productTitle" class="user-label"> Product title </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class = "user-input" type="text" name="productTitle" placeholder="Title"  value="<?php echo $data['fee_title'] ?>" />
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="fee" class="user-label"> Fee </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class = "user-input" type="text" name="fee" placeholder="fee"  value="<?php echo $data['fee_price'] ?>" />
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="benefit" class="user-label"> Benefit </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class = "user-input" type="text" name="benefit" placeholder="Benefit"  value="<?php echo $data['fee_benefit'] ?>" />
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
  <div class="user-row right1">
      <input type="hidden" name="id" value="<?php echo $data['fee_id']?>" />
      <button type="submit">Save Changes</button>
      <a href="registration_edit.php"><button type="button">Back</button></a>
  </div>
  </div> <!-- ./ row -->

  </form>
  </div>  

</section>

  </div> <!-- ./ row -->
</div> <!-- ./ container -->


<?php
}
?>


<?php
  // if save changes button clicked, update fee table and display message with "home" and "back" buttons
 if($_POST) {
	$fee_title = $_POST['productTitle'];
	$fee_price = $_POST['fee'];
    $fee_benefit = $_POST['benefit'];
    
	$id = $_POST['id'];

	$sql  = "UPDATE fee SET fee_title = '$fee_title', fee_price = '$fee_price', fee_benefit = '$fee_benefit' WHERE fee_id = {$id}";
	if($conn->query($sql) === TRUE) {
        echo"<div class='container marketing'>
        <div class='updateMessage'>";
		echo "<p id='successUpdateMesssage'>Update Success</p>";
		echo "<a href='registration_edit.php'><button type='button'>Back</button></a>";
		echo "<a href='index.php'><button type='button'>Home</button></a>";
        echo "</div>
        </div>";

	} else {
        echo"<div class='container marketing'>
        <div class='row'>";
		echo "Erorr while updating record : ". $conn->error;
        echo "</div>
        </div>";
	}

	$conn->close();

}
?>

<hr class="featurette-divider" />


<?php include 'includes/footer.php' ?>