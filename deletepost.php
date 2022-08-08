<?php

include_once("top.php");

//print_r($_POST);

// Check if delete button active, start this
if(isset($_POST['checkbox'])){
    $rows = $_POST['checkbox'];
    $rowsdeleted = 0;

    // if user selected some rows
    if (count($rows) > 0){
        foreach($rows as $row){
            $sql = "DELETE FROM employee WHERE id='$row'";
            $delete = mysqli_query($conn,$sql);

            if($delete){
                $rowsdeleted += 1;        
            }
        }
    }
    
    if($rowsdeleted > 0){
        if($rowsdeleted==1){
            echo "One row deleted successfully.";    
        }
        else{
            echo $rowsdeleted." rows deleted successfully.";
        } 
    }
}
else{
    echo "No rows selected for delete!";
}
?>
