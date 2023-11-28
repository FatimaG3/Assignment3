<?php

    session_start();

    if(!isset($_SESSION["logged_in"])) {
        header("Location: login.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="css/all.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />

        <title>Home</title>
	</head>
	<body>

        <p class="welcome">
            Welcome, 
            <span class="fullname"><?php echo $_SESSION["fullname"]; ?></span> 
            <br>
            <a href="logout.php">Logout</a>
        </p>

		<main class="container">
			<h1>Choose an Option</h1>
            <br>
				
            <div class="button-group">
                <button type="button" class="reset"><a href="cv.php">CV</a></button>
            </div>

            <div class="button-group">
                <button type="button" class="reset"><a href="gallery.php">Gallery</a></button>
            </div>

            <div class="button-group">
                <button type="button" class="reset"><a href="logout.php">Logout</a></button>
            </div>

        </main>

	</body>
</html>
