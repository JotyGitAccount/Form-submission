<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
     <?php
          $firstname = $lastname = $emailaddress =$gender = $username = $passwordfield = $address = $peraddress = $phone = "";
          $firstnameErr = $lastnameErr = $emailaddressErr = $genderErr = $usernameErr = $passwordfieldErr = $addressErr = $peraddressErr = $phoneErr = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") 
         {
         	if (empty($_POST['fname'])) 
         	{
         		$firstnameErr = "Enter your first name";
         	}
         	else
         	{
         		$firstname = $_POST['fname'];
         	}

         	if (empty($_POST['lname'])) 
         	{
         		$lastnameErr = "Enter your last name";
         	}
         	else
         	{
         		$lastname = $_POST['lname'];
         	}

         	if (empty($_POST['email'])) 
         	{
         		$emailaddressErr = "Enter your email";
         	}
         	else 
         	{
               $emailaddress = $_POST['email'];
            }
            
            if (empty($_POST['gender']))
             {
            	$genderErr = "Select your gender";
            }
            else
            {
            	$gender = $_POST['gender'];
            }

            if (empty($_POST['uname']))
             {
            	$usernameErr = "Enter your username";
            }
            else
            {
            	$username = $_POST['uname'];
            }
              
            if (empty($_POST['password']))
            {
            	$passwordfieldErr = "Enter a password";
            }
            else
            {
            	$passwordfield = $_POST['password'];
            }

            if (empty($_POST['address']))
            {
            	$addressErr = "Enter your present address";
            }
            else
            {
            	$address = $_POST['adsress'];
            }
             if (empty($_POST['peraddress']))
            {
            	$peraddressErr = "Enter your permanent address";
            }
            else
            {
            	$address = $_POST['peradsress'];
            }
             if (empty($_POST['phone']))
            {
            	$phoneErr = "Enter your phone number";
            }
            else
            {
            	$phone = $_POST['phone'];
            }

         	if ($firstnameErr == "" && $lastnameErr == "" && $emailaddressErr == "" && $genderErr == "" && $usernameErr == "" && $passwordfieldErr == "" && $addressErr == "" && $peraddressErr == "" && $phoneErr == "") 
         	{
         		echo "Successful";
         	}
        }
     ?>

  
     
     <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
         <fieldset>
         	<legend align=center><h1>Basic Information</h1></legend>
      	     <label for="firstname">First Name</label>
      	     <input type="text" id="firstname" name="fname" value="<?php echo $firstname ?>">
      	     <br>
      	     <?php echo $firstnameErr; ?>
      	     <br><br>
      	      <label for="lastname">Last Name</label>
      	     <input type="text" id="lastname" name="lname" value="<?php echo $lastname ?>">
      	     <br>
      	     <?php echo $lastnameErr; ?>
      	     <br><br>
      	     <label for="email">Email</label>
      	     <input type="email" id="email" name="email" value="<?php echo $emailaddress ?>">
      	     <br>
      	     <?php echo $emailaddressErr; ?>
      	     <br><br>
      	     <label for="gender">Gender:</label>
      	     <br>
      	     <label for="male">Male</label>
      	     <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value ="male" >
             <label for="female">Female</label>
             <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value = "female" >
             <label for="other">Other</label>
             <input type="radio" id="other" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value ="other" >
             <br>
             <?php echo $genderErr; ?>
             <br><br>

            </fieldset>

            <fieldset>
                <legend  align=center><h2>Contact Information :</h2></legend>
                
                <label for="address">Present Address :</label>
                <br>
                <input type="text" id="address" name="address" value="<?php echo $address ?>">
                <br>
                <?php echo $addressErr;?>
                <br>
                <br>

                <label for="address">Parmanet Address :</label>
                <br>
                <input type="text" id="peraddress" name="peraddress" value="<?php echo $peraddress ?>">
                <br>
                <?php echo $peraddressErr;?>
                <br>
                <br>
             
                
                <label for="phone">Phone-Number :</label>
                <br>
                <input type="number"  id="phone" name="phone" value="<?php echo $phone ?>">
                <br>
                <?php echo $phoneErr;?>
                           
               </fieldset>

             <fieldset> 
             
             	<legend align=center><h2>Account Information</h2> </legend>

             <label for="userid">User Id</label>
      	     <input type="text" id="uname" name="uame" value="<?php echo $username?>">
      	     <br>
      	     <?php echo $usernameErr; ?>
      	     <br><br>
      	     <label for="password">Password</label>
      	     <input type="password" id="password" name="password" value="<?php echo $passwordfield ?>">
      	     <br>
      	     <?php echo $passwordfieldErr; ?>
      	     <br>
      	    </fieldset>
      	     
      	     
      
  
      	     <br><br>
      	     <input type="submit" value="Submit">

            
  </form>
      	     

</body>
</html>