<?php
  if (isset($_POST ["submit"]))
  {
    $count = $_POST["string"];
    $reverse = $_POST["reverse"];
    $position = $_POST["position"];
    $replace = $_POST["replacement"];
    $ucase = $_POST["uppercase"];
    $lcase = $_POST["lowercase"];

    $integer = $_POST["integer"];
    $numeri = $_POST["numeric"];
    // $minimum = $_POST["small_function"];
    // $maximum = $_POST["small_function"];

    $absolue = $_POST["small_function"];
    $sqaure = $_POST["small_function"];
    $round = $_POST["small_function"];
    $define = $_POST["define"];

    
    echo("the count of each variable in each string is =".strlen($count) ."<br>");
    echo("the count of string is = ".str_word_count($count) . "<br>");
    echo("the reverse of the string is = ".strrev($reverse). "<br>");
    echo("the position of the Huzaifa in string is = ".strpos($position , "Huzaifa" ) ."<br>");
    echo("the replacement of the Huzaifa with Safwan in all the string passes =".str_replace("Huzaifa","Safwan",$replace) . "<br>");
    echo("change the string in uppercase  =".strtoupper($ucase) . "<br>");
    echo("change the string in lowercase =".strtolower($lcase) . "<br>");

    var_dump(is_int($integer));
    var_dump(is_numeric($numeri));
    // echo("find the minimum value = ".min($minimum) . "<br>");
    // echo("find the maximum value =".max($maximum) ."<br>");

    echo("<br> find the absolute value =".abs($absolue) ."<br>");
    echo("find the sqaure root value =".sqrt($sqaure) ."<br>");
    echo("find the round value =".round($round)."<br>");
    define("any_text", $define).   "<br>" ;
    echo ("call form the define word any_text = ".any_text);
 
  }
