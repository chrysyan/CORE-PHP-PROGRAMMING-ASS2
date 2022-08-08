<?php 
include_once("top.php"); 

$sql="SELECT * FROM employee";
$result=mysqli_query($conn,$sql);
?>

<section>
    <table>
        <thead id="heading">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birth Date</th>
                <th>Phone Number</th>
                <th>Email</th> 
            </tr>
        </thead>
        <tbody>

        <?php
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlentities($row["id"]); ?></td>
                    <td><?php echo htmlentities($row["firstname"]); ?></td>
                    <td><?php echo htmlentities($row["lastname"]); ?></td>
                    <td><?php echo htmlentities(date('d.m.Y',strtotime($row["birthdate"]))); ?></td>
                    <td><?php echo htmlentities($row["phonenumber"]); ?></td>
                    <td><?php echo htmlentities($row["email"]); ?></td> 
                </tr>
            <?php endwhile;
        }     
        else{ ?> 
            <tr>
                <td colspan="6" style="text-align: center;">There are no records to show.</td>
            </tr>
        <?php
        }
        ?>

        </tbody>
    </table>
</section>

<?php include_once("bottom.php"); ?>

