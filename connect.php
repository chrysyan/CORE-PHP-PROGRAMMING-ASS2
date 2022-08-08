<?php

// db connect
$conn=mysqli_connect("localhost","root","","employee");

if($conn===false){
    // handle error
    echo "Failed to connect DB ".mysqli_connect_error();
}

?>