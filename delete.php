<?php 
include_once("top.php"); 

$sql="SELECT * FROM employee";
$result=mysqli_query($conn,$sql);
?>

<section>
    <form method="POST" action="deletepost.php">
        <table>
            <thead id="heading">
                <tr>
                    <th style="font-size: 12px; font-style: italic;">Select rows</th>
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
                        <td><input name="checkbox[]" type="checkbox" value="<?php echo htmlentities($row['id']); ?>" 
                        style="width:14px; height:14px;"></td>
                        <td><?php echo htmlentities($row["id"]); ?></td>
                        <td><?php echo htmlentities($row["firstname"]); ?></td>
                        <td><?php echo htmlentities($row["lastname"]); ?></td>
                        <td><?php echo htmlentities(date('d.m.Y',strtotime($row["birthdate"]))); ?></td>
                        <td><?php echo htmlentities($row["phonenumber"]); ?></td>
                        <td><?php echo htmlentities($row["email"]); ?></td> 
                    </tr>
            <?php endwhile; ?>

            <tr>
                <td colspan="7" style="text-align: center;"><input type="submit" name="delete" value="Delete selected employees"></td>
            </tr>

            <?php
            }
            else{ ?>  
                <tr>
                    <td colspan="7" style="text-align: center;">There are no records to delete.</td>
                </tr>
            <?php 
            }
            ?>
            </tbody>
        </table>
    </form>
</section


