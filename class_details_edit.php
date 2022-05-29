<?php include 'includes/header.php' ?>

<!-- Container -->
<div class="container marketing">
<div class="row">
<section class="twelve" id = "contact_Manage">
<div class="contact_Manage" >
<!-- Make a table to contain Class details from database -->    
<table border="1" cellspacing="10" cellpadding="10">
    <!-- Table label -->
        <thead>
            <tr>
                <th>Class Number</th>
                <th>Class Name</th>
                <th>Details</th>
            </tr>
        </thead>

        <!-- Table contents-->
        <tbody>
            <?php
            $sql = "SELECT * FROM class";
            $result = $conn->query($sql);

            // if the result of query has a content, populate tables with contetns of fee table 
            if($result->num_rows > 0) {
                // while loop to fetch contents to array in a row
                while($row = $result->fetch_assoc()) {
                    // populate the tables with contents fectched to array 
                    // 'Edit' button to mark up with 'id' to get relevant contents in update page.
                    echo "<tr>
                        <td>".$row['class_id']."</td>
                        <td>".$row['class_name']."</td>
                        <td>".$row['class_detail']."</td>
                        <td>
                        <a href='class_details_update.php?id=".$row['class_id']."'><button type='button'>Edit</button></a>
                    </td>
                    </tr>";

                }
             // if no content to be populated display error message   
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
   </div>
  </section>
 </div>
</div>

<hr class="featurette-divider" />


<?php include 'includes/footer.php' ?>