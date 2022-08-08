<?php include_once("top.php"); ?>

<section>
	<form method="POST" action="post.php">
		<input name="firstname" type="text" value="<?php if(isset($firstname)){echo $firstname;}?>"
				<?php if(isset($errors['firstname'])) {echo "style='border: 1px solid red;'";} ?> placeholder="First Name">
	

		<input name="lastname" type="text" value="<?php if(isset($lastname)){echo $lastname;}?>"
				<?php if(isset($errors['lastname'])) {echo "style='border: 1px solid red;'";} ?> placeholder="Last Name">

		<input name="birthdate" type="text" value="<?php if(isset($birthdate)){echo $birthdate;}?>"
				<?php if(isset($errors['birthdate'])) {echo "style='border: 1px solid red;'";} ?> placeholder="Birth Day (zz.ll.aaaa)">

		<input name="phonenumber" type="text" value="<?php if(isset($phonenumber)){echo $phonenumber;}?>"
				<?php if(isset($errors['phonenumber'])) {echo "style='border: 1px solid red;'";} ?> placeholder="Phone Number">

		<input name="email" type="text" value="<?php if(isset($email)){echo $email;}?>"
				<?php if(isset($errors['email'])) {echo "style='border: 1px solid red;'";} ?> placeholder="Email Adress">

		<input type="submit" name="submit" value="Add employee">
	</form>
</section>

<?php include_once("bottom.php"); ?>
		


		
			
			