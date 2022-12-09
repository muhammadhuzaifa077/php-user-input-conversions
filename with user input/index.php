<?php

if (isset($_POST ["submit"]))
{
    $prit = $_POST["print"];
    echo "This is your print text by php <h1>$prit</h1>";

    $number = $_POST["value"];
    echo "this is your numeric value print by php  <h1>$number</h1>";
}
?>