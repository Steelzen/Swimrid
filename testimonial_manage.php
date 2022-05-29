<?php include 'includes/header.php' ?>

<!-- Container -->
<div class="container marketing">
<div class="row">
<section class="twelve" id = "contact_Manage">
<div class="contact_Manage" >
<!-- Make a table to contain testimonial contents from database --> 
<table border="1" cellspacing="10" cellpadding="8">
        <!-- Table label -->
        <thead>
            <tr>
                <th>Testimonial Number</th>
                <th>Date</th>
                <th>Name</th>
                <th>Class Name</th>
                <th>Comment</th>
            </tr>
        </thead>

        <!-- Table contents-->
        <tbody>
            <?php
            $sql = "SELECT * FROM testimonial";
            $result = $conn->query($sql);

            // if the result of query has a content, populate tables with contetns of testimonial table. 
            if($result->num_rows > 0) {
                // while loop to fetch contents to array in a row.

                while($row = $result->fetch_assoc()) {
                    // populate the tables with contents fectched to array. 
                    // 'Choose' button to mark up with 'id' to get intended contents.
                    echo "<tr>
                        <td>".$row['testimonial_id']."</td>
                        <td>".$row['testimonial_date']."</td>
                        <td>".$row['testimonial_userFirstname']."</td>
                        <td>".$row['testimonial_classname']."</td>
                        <td>".$row['testimonial_comment']."</td>
                        <td>
                        <a href='testimonial_manage.php?id=".$row['testimonial_id']."'><button type='button'>Choose</button></a>
                    </td>
                    </tr>";

                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }

            // change the position of data in table
            if($_GET['id']) {
                $id = $_GET['id'];

                // $oneToTwo = "INSERT INTO testimonial (testimonial_date, testimonial_userFirstname, testimonial_classname, testimonial_comment)
                // VALUES ('$date', '$user_first', '$classname', '$comment');"; 

                while($row = $result->fetch_assoc()) {
                    $testimonial_id = $row['testimonial_id'];
                    $increment = "UPDATE testimonial SET testimonial_id = '$testimonial_id'+1 WHERE testimonial_id = '$testimonial_id' ";
                    $resultIncrement = $conn -> query($increment);
                }
     
                $upadateQuery = "UPDATE testimonial SET testimonial_id = 1 WHERE testimonial_id = {$id}";
                $updateResult = $conn->query($upadateQuery);

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