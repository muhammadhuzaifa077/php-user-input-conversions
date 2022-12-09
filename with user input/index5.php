<?php

if(isset($_POST["add"]))
{
    $add1 =$_POST["add1"];
    $add2 =$_POST["add2"];
  addition($add1,$add2);

}

function addition($a,$b)
    {
        $sum =  $a + $b;
        echo "the addition of two numbers= $sum";
    }
?>




<?php

if(isset($_POST["subtraction"]))
{
    $sub1 =$_POST["sub1"];
    $sub2 =$_POST["sub2"];
    subtraction($sub1,$sub2);

}

function subtraction($a,$b)
    {
        $sub =  $a - $b;
        echo "the subtraction of two numbers= $sub";
    }
?>





<?php

if(isset($_POST["multiply"]))
{
    $mul1 =$_POST["mul1"];
    $mul2 =$_POST["mul2"];
    multiplication($mul1,$mul2);

}

function multiplication($a,$b)
    {
        $mul =  $a * $b;
        echo "the addition of two numbers= $mul";
    }
?>




<?php

if(isset($_POST["divide"]))
{
    $div1 =$_POST["div1"];
    $div2 =$_POST["div2"];
    division($div1,$div2);

}

function division($a,$b)
    {
        $div =  $a / $b;
        echo "the division of two numbers= $div";
    }
?>


<?php

if(isset($_POST["increment"]))
{
    $increment1 =$_POST["incre1"];
    $increment2 =$_POST["incre2"];
    increment($increment1,$increment2);

}

function increment($a,$b)
    {
        $incre =  $a + $b;
        $incre ++;
        echo "the addition of two numbers with incremnet of 1 = $incre";
    }
?>
