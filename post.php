<?php

include_once("top.php");

//print_r($_POST);

// Validation
if(isset($_POST['submit'])){
	
	$firstname=trim($_POST["firstname"]);
	$lastname=trim($_POST["lastname"]);
	$birthdate=trim($_POST["birthdate"]);    
    $phonenumber=trim($_POST["phonenumber"]);
	$email=trim($_POST["email"]);
	$errors=array();

    // First name validation
	if(empty($firstname)){
		$errors['firstname']="You did not enter first name.";
	}
	else if (strlen($firstname) < 3){
		$errors['firstname']="First name must be a least 3 characters long";
	}

    // last name validation
	if(empty($lastname)){
		$errors['lastname']="You did not enter last name.";
	}
	else if (strlen($lastname) < 3){
		$errors['lastname']="Last name must be a least 3 characters long";
	}	

    // Birthdate validation
	if(empty($birthdate)){
		$errors['birthdate']="You did not enter birth date.";
	}
    elseif(!preg_match("/^[0-3][0-9]\.[0-1][0-9]\.[0-9]{4}$/",$birthdate)){
        $errors['birthdate'] = "You did not enter a valid birth date. Use format 'zz.ll.aaaa'";
    }

    // Phone number validation
	if(empty($phonenumber)){
		$errors['phonenumber']="You did not enter phone number.";
	}
 	elseif(!preg_match("/^[0]{1}[0-9]{9}$/", $phonenumber)) {
		$errors['phonenumber'] = "You did not enter a valid phone number. Use 10 digit format '0999999999'";
	}

	//Email validation
	if(empty($email)) {
		$errors['email'] = "You did not enter a email.";
	}
	elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9-a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-z]{2,6}$/i", $email)) {
			$errors['email'] = "You did not enter a valid email.";
	}

    // Check for errors
	if(empty($errors)) {
		// no errors, insert data into table
        $sql="INSERT INTO employee (firstname, lastname, birthdate, phonenumber, email) 
        VALUES ('".ucfirst($firstname)."','".ucfirst($lastname)."','".date('Y-m-d',strtotime($birthdate))."','".$phonenumber."','".$email."');";

        if(mysqli_query($conn,$sql)){
            echo "Data added successfully!";
        }
        else{
            echo "Error! ".mysqli_error($conn);
        }
    }
    else{
        // show errors
        foreach($errors as $error) {
            echo "<p class='message'> Error: " . $error . "</p>";
        }
        
        // reload the form for adjustments
        include("index.php");
    }
}

?>

<?php include_once("bottom.php"); ?>



