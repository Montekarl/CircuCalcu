<?php
    declare(strict_types=1);
    include 'includes/autoloader.inc.php'
?>

<html>
    <head>
    <title>CircuCalcu</title>
    </head>
    <body>
        <h5>
            Please insert Radius
        </h5>
        <form action = "" method="post">
            <input type = "text" name="radius";>
            <input type = "submit" name="SubmitButton">
        </form>
        
        <?php 
            if(isset($_POST['SubmitButton']))
            {
                $input = $_POST['radius'];
                $newCircle = new Mathematics();
                $newCircle->getRadius($input);
                echo "If Radius is: " . $newCircle->radius. "<br>";
                echo "The Area of Such Circle is " . $newCircle->calcArea($input) . "<br>";
                echo "and the Circumference is " . $newCircle->calcCircumference($input);
            }
        ?>
    </body>
</html>