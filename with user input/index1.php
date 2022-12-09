
<?php

if (isset($_POST ["submits"]))
{
    $value = $_POST["value"];
    echo "this is your value $value <br>";

    

if($value == is_numeric($value))
{
    echo "<h3>This is numeric value = $value</h3>  ";
}
else if($value == is_string($value)) 
{
    echo "<h3>This is string value = $value</h3>";
}
else 
{
    echo "invalid datatype";
}
}
?>