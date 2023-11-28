<?php

    session_start();

    if(!isset($_SESSION["logged_in"])) {
        header("Location: login.php");
        exit();
    }

    $dir = dirname(__FILE__);
    
    
    $file = file_get_contents("$dir/database/images.json");

    if(!$file){
        echo "<h1>Could not load images!</h1>";
        exit();
    }

    $images = json_decode($file,true);

    function show_image($image) {
        echo "<div class='image-container'>
            <a href='gallery/$image'>
                <img src='gallery/$image' class='image'>
            </a>
        </div>";
    }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="css/all.css" />
		<link rel="stylesheet" type="text/css" href="css/gallery.css" />

        <title>Gallery</title>
	</head>
	<body>

        <p class="back">
            <a href="index.php">Home</a>
        </p>

        <p class="welcome">
            Welcome, 
            <span class="fullname"><?php echo $_SESSION["fullname"]; ?></span> 
            <br>
            <a href="logout.php">Logout</a>
        </p>

		<main class="container">
			<h1>Gallery</h1>
            <br>
				
            <div class="gallery">
                <?php 
                    if(isset($images["images"])){
                        foreach ($images["images"] as $image) {
                            show_image($image);

                        }
                    }
                    else{
                        echo "<h2>Images Not found in</h2>";
                    }
                ?>
            </div>

        </main>

	</body>
</html>
