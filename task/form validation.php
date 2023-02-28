<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<style>
		form {
			margin: auto;
			width: 50%;
			padding: 10px;
			border: 1px solid #f2f2f2;
			background-color: #f9f9f9;
		}
		input[type=text], input[type=password], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		.error {
			color: #FF0000;
		}
        body{
            background-color: darkseagreen;
        }
	</style>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
        // Define variables and set to empty values
        $nameErr = $passwordErr = $genderErr =$addressErr=$countryErr= $emailErr = $confirm_passwordErr ="";
        $name =  $password =  $gender =  $email = $country= $confirm_password= $address="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                // Check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }
        

           
            // Validate password
            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            } else {
                $password = test_input($_POST["password"]);
                // Check if password is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number
                if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
                    $passwordErr = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number";
                }
            }



            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // Check if email is a valid email address
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "*Invalid email format";
                }
            }

            if (empty($_POST["gender"]))
            {
               $genderErr = "select option";
           } else {
               $gender = test_input($_POST["gender"]);
           }
           if (empty($_POST["country"])) {
            $countryErr = "select any one option";
        } else {
            $country = test_input($_POST["country"]);
   
        }
        
            // Check if confirm password is empty
            if (empty($_POST["confirm_password"])) {
              $confirm_passwordErr = "Confirm Password is required";
            } else {
              $confirm_password = test_input($_POST["confirm_password"]);
              // Check if passwords match
              if ($_POST["password"] != $_POST["confirm_password"]) {
                $confirm_passwordErr = "Passwords do not match";
              }
            }
        }
     

        // Function to sanitize input data
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
<center><h1><b>FORM</b></h1></center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password"  value=<?php echo $password;?>>
  <span class="error">* <?php echo $passwordErr;?>
</span>
  <br><br>
  confirmpassword:<input type="password" name="confirm_password" value="<?php echo $confirm_password;?>">
  <span class="error" >* <?php echo $confirm_passwordErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <br><br>
  country:
  <select name="country">
    <option>---select---</option>
    <option>india</option>
    <option>srilanka</option>
    <option>bihar</option>
    <option>nepal</option>
    <option>bangladesh</option>
    <option>china</option>

 </select>
 address:
 <br>
 <textarea  name="address" rows="10" cols="20"></textarea>
  <br>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Name: " . $name;
echo "<br>";
echo "Email: " . $email;
echo "<br>";
echo "Gender: " . $gender;
echo"<br>";
echo "country: " . $country;
echo "<br>";
echo "address: " . $address;


?>

</body>
</html>
