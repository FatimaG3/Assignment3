<?php

	session_start();
	
    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]){
		header("Location: index.php");
        exit();
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="css/all.css" />
		<link rel="stylesheet" type="text/css" href="css/signup.css" />

        <title>Sign Up</title>
	</head>
	<body>
		<main class="container">
			<h1>Sign Up</h1>
			<form method="POST" action="functions/signup_function.php">
				<div class="floating-form-group">
					<input type="text" name="firstname" id="firstname" placeholder="Firstname" required value="<?php if(isset($_SESSION["error"]) && $_SESSION["error"]) echo $_SESSION["tmp_firstname"]; ?>" />
					<label for="firstname">Firstname</label>
				</div>

                <div class="floating-form-group">
					<input type="text" name="lastname" id="lastname" placeholder="Lastname" required value="<?php if(isset($_SESSION["error"]) && $_SESSION["error"]) echo $_SESSION["tmp_lastname"]; ?>" />
					<label for="lastname">Lastname</label>
				</div>

                <div class="normal-form-group">
					<label for="dob">Date of Birth</label>
					<input type="date" name="dob" id="dob" placeholder="Date of Birth" required value="<?php if(isset($_SESSION["error"]) && $_SESSION["error"]) echo $_SESSION["tmp_dob"]; ?>" />
				</div>
                <div class="normal-form-group">
					<label for="sex">Sex</label>
                    <select name="sex" id="sex">
                        <option value="Male" <?php if(isset($_SESSION["error"]) && $_SESSION["error"] && $_SESSION["tmp_sex"] == "Male") echo "selected"; ?>>Male</option>
                        <option value="Female" <?php if(isset($_SESSION["error"]) && $_SESSION["error"] && $_SESSION["tmp_sex"] == "Female") echo "selected"; ?>>Female</option>
                        <option value="Other" <?php if(isset($_SESSION["error"]) && $_SESSION["error"] && $_SESSION["tmp_sex"] == "Other") echo "selected"; ?>>Other</option>
                    </select>
				</div>
                <div class="floating-form-group">
					<input type="text" name="username" id="username" placeholder="Username" required value="<?php if(isset($_SESSION["error"]) && $_SESSION["error"]) echo $_SESSION["tmp_username"]; ?>" />
					<label for="username">Username</label>
				</div>
				<div class="floating-form-group">
					<input type="password" name="password" id="password" placeholder="Password" required />
					<label for="password">Password</label>
				</div>
                <div class="floating-form-group">
					<input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required />
					<label for="cpassword">Confirm Password</label>
				</div>

                <div class="button-group">
    				<button type="reset" class="reset">Clear</button>
                    <button type="submit" class="submit">Sign Up</button>
                </div>
				<div>
					<p>Already have an account? <a href="login.php">Login</a></p>
				</div>
			</form>
		</main>

        <?php
			include "includes/footer.php";
		?>
	</body>
</html>
