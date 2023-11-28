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
		<link rel="stylesheet" type="text/css" href="css/login.css" />

        <title>Login</title>
	</head>
	<body>
		<main class="container">
			<h1>Login</h1>
			<form method="POST" action="functions/login_function.php">
				<div class="floating-form-group">
					<input type="text" name="username" id="username" placeholder="Username" required value="<?php if((isset($_SESSION["valid_signup"]) && $_SESSION["valid_signup"]) || (isset($_SESSION["error"]) && $_SESSION["error"])) echo $_SESSION["tmp_username"]; ?>" />
					<label for="username">Username</label>
				</div>
				<div class="floating-form-group">
					<input type="password" name="password" id="password" placeholder="Password" required />
					<label for="password">Password</label>
				</div>
                <div class="button-group">
    				<button type="reset" class="reset">Clear</button>
                    <button type="submit" class="submit">Login</button>
                </div>
				<div>
					<p>Don't have an account? <a href="signup.php">Sign Up</a></p>
				</div>
			</form>
		</main>

        <?php
			include "includes/footer.php";
		?>
	</body>
</html>
