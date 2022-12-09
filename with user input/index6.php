<?php
if(isset($_POST["submit"]))
{
    $number1 = $_POST["loop1"];
    $number2 = $_POST["loop2"];

    while($number1 <= $number2)
    {
        echo " the number is  = $number1 <br>";
        $number1 ++;
    }
}
?>

<br>
<br>

<?php
if(isset($_POST["submited"]))
{
    $number3 = $_POST["loop3"];
    $number4 = $_POST["loop4"];

    do{
        echo " the number is  = $number3 <br>";
        $number3 ++;

    } while($number3 <= $number4);
}
?>


<br>
<br>

<?php
if(isset($_POST["submits"]))
{
    $number5 = $_POST["loop5"];
    $number6= $_POST["loop6"];

    for($number5,$number6    ;$number5<= $number6 ;$number5 ++){

        echo " the number is  = $number5 <br>";
    }

}
?>