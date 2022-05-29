<?php include 'includes/header.php' ?>


<?php 
   // statement to get relevant marked up contents in edit page
  if($_GET['id']) {
	$id = $_GET['id'];

    // Select a data marked up in edit page
	$sql = "SELECT * FROM class WHERE class_id = {$id}";
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
        <h3>Class details edit</h3>

<form action="class_details_update.php" method="post">

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="title" class="user-label"> Class name </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <input class = "user-input" type="text" name="title" placeholder="Title"  value="<?php echo $data['class_name'] ?>" />
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
    <div class="col-lg-4"> 
      <!-- label --> 
      <label for="detail" class="user-label"> Details </label> 
    </div>  <!-- ./ col-lg-4-->
    <div class="col-lg-4">  
      <!-- input -->
      <textarea class="user-textarea" name="detail" width = "150" placeholder="Detail"><?php echo $data['class_detail']?></textarea>
    </div>  <!-- ./ col-lg-4-->  
  </div> <!-- ./ row --> 

  <div class="row">
  <div class="user-row right1">
      <input type="hidden" name="id" value="<?php echo $data['class_id']?>" />
      <button type="submit">Save Changes</button>
      <a href="class_details_edit.php"><button type="button">Back</button></a>
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
 // if save changes button clicked, update class table and display message with "home" and "back" buttons
 if($_POST) {
	$class_name = $_POST['title'];
	$class_detail = $_POST['detail'];

	$id = $_POST['id'];

	$sql  = "UPDATE class SET class_name = '$class_name', class_detail = '$class_detail' WHERE class_id = {$id}";
	if($conn->query($sql) === TRUE) {
        echo"<div class='container marketing'>
            <div class='updateMessage'>";
		echo "<p id='successUpdateMesssage'>Update Success</p>";
		echo "<a href='class_details_edit.php'><button type='button'>Back</button></a>";
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