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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="css/cv.css" />
        <title>CV Template</title>
        
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

        <div class="Container">
            <div class="header">
                <div class="img-area">
                    <img src="https://www.shutterstock.com/image-vector/cartoon-thai-students-learn-computer-260nw-1678372879.jpg"alt="">


             
            </div>
            <h1>Fatima Mouazzen</h1>
            <h3>computer scientest</h3>


        </div>
        <div class="main"> 
            <div class="left">
                <h2>Personal Information</h2>
                <p> <strong> Name:</strong>Fatima Mouazzen</p>
                <p> <strong> Age:</strong>21</p>
                <p> <strong> Email:</strong>Fatimamoazen3@gmail.com</p>
                <p> <strong> Phone:</strong>03 726 110</p>
                <h2>Skills</h2>
                <ul>
                    <li>HTML/CSS</li>
                    <li>JAVA</li>
                    <li>Python</li>
                    <li>SQL</li>
                    <li>HTML/CSS</li>
                    <li> C language</li>


                </ul>
                <h2>Education</h2>
                <h3>BS in Computer Science</h3>
                <p>Lebanese American University, 2020-2023</p>
               

            </div>
            <div class="right">
                <h2>Work Experiences</h2>
                <h3>MSC Mediterranean Shipping Company</h3>
                <p><strong>Position: </strong>Software Developer Senior</p>
                <p><strong>Duration: </strong> Three Months</p>
                <ul>
                    <li>developed and maintained web applications</li>
                    <li>Implemented responsive design </li>
                    <li>Collaborated with cross-functional teams to deliver high-quality software products </li>
                    <li>developed projects using java </li>

                </ul> <br>
                <h3>Murex</h3>
                <p><strong>Position: </strong>Trainee</p>
                <p><strong>Duration: </strong>Six Months</p>
                <ul>
                    <li>created and maintained websites using html,css and javascript</li>
                    <li>optimized website performance and user experience using best practices </li>
                    <li>developed projects using java </li>

                </ul> <br>

            </div>
        </div>

    </body>
</html>
