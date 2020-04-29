<?php 
   include 'includes/autoloader.inc.php'
?>

<html>
    <head>
    <title>ShapeCalcu</title>
    </head>
    <body>
        Choose shape: <br/>
        <form action = "" method="post">
            
            <select name = "shape">
                <option></option>
                <option>circle</option>
                <option>square</option>
            </select> <br/>
            
            Insert Radius / Side:<br/>
            <input type = "text" name="value";>
            <input type = "submit" name="SubmitButton">
        </form>
        
        <?php 
            if(isset($_POST['SubmitButton']))
            {
                $shape = $_POST['shape'];
                $input = $_POST['value'];
                
                try 
                {
                    $newShape = new Mathematics();
                    echo $newShape->calcuCalcu($shape, $input); 
                }
                catch(TypeError $e)
                {
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
                
            }
        ?>
    </body>
</html>
