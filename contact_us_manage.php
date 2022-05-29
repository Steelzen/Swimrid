<?php include 'includes/header.php' ?>

<!-- This page is to read contact message from visitor -->>
<!-- Container -->
<div class="container marketing">
<div class="row">
<section class="twelve" id = "contact_Manage">
<div class="contact_Manage" >
    <!-- Make a table to contain contact us message from database --> 
<table border="1" cellspacing="10" cellpadding="10">
        <!-- Table label -->
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
        </thead>

        <!-- Table contents-->
        <tbody>
            <?php
            $sql = "SELECT * FROM contact_us";
            $result = $conn->query($sql);


            // if the result of query has a content, populate tables with contetns of contact_us table 
            if($result->num_rows > 0) {
                // while loop to fetch contents to array in a row
                while($row = $result->fetch_assoc()) {
                    // populate the tables with contents fectched to array 
                    echo "<tr>
                        <td>".$row['contact_us_name']."</td>
                        <td>".$row['contact_us_email']."</td>
                        <td>".$row['contact_us_phone']."</td>
                        <td>".$row['contact_us_message']."</td>
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
