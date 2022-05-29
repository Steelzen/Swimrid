<?php include 'includes/header.php' ?>

<!-- Container -->
<div class="container marketing">
<div class="row">
<section class="twelve" id = "contact_Manage">
<div class="contact_Manage" >
<!-- Make a table to contain fee information from database -->    
<table border="1" cellspacing="10" cellpadding="10">
    <!-- Table label -->
        <thead>
            <tr>
                <th>Product number</th>
                <th>Product title </th>
                <th>Fee </th>
                <th>Benetfit </th>
            </tr>
        </thead>

        <!-- Table contents-->
        <tbody>
            <?php
            $sql = "SELECT * FROM fee";
            $result = $conn->query($sql);

            // if the result of query has a content, populate tables with contetns of fee table 
            if($result->num_rows > 0) {
                // while loop to fetch contents to array in a row
                while($row = $result->fetch_assoc()) {
                    // populate the tables with contents fectched to array 
                    // 'Edit' button to mark up with 'id' to get relevant contents in update page.
                    echo "<tr>
                        <td>".$row['fee_id']."</td>
                        <td>".$row['fee_title']."</td>
                        <td>".$row['fee_price']."</td>
                        <td>".$row['fee_benefit']."</td>
                        <td>
                        <a href='registration_update.php?id=".$row['fee_id']."'><button type='button'>Edit</button></a>
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