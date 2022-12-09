
<?php
    
    if(isset($_POST ['submit']))
    {
        //solution
        $age = $_POST["age"];
        echo "<h2> Your Age is = $age so, <h2>";
        
        if ($age >= 18)
            echo "<h1>Eligible for Voting!</h1>";
        else
            echo "<h1>Not Eligible for Voting!</h1>";
    }

    ?>
