<?php
    if(isset($_POST["submits"])){
        $languages = $_POST["langua"];

        switch ($languages)
        {
            case "php":
            echo "This is a PHP language.";
            break;
            case "mysql":
            echo "This is the mysql language.";
            break;
            case "javascript":
            echo "This is the javascript language.";
            break;
            case "html":
            echo "This is the HTML language.";
            break;
            case "C#":
            echo "this is the C# (sharp) language.";
            break;
            default:
            echo "invalid language";
        }
    }
?>



<?php
    if(isset($_POST["submit"])){
        $name = $_POST["value"];

        switch ($name)
        {
            case "safwan":
            echo "class teacher (M safwan sheikh)";
            break;
            case "huzaifa":
            echo "class student (M.huzaifa)";
            break;
            case "shahbaz":
            echo "class student (M.shahbaz)";
            break;
            case "ali":
            echo "class student (ali raza)";
            break;
            case "arbaz":
            echo "class student (M.arbaz)";
            break;
            default:
            echo "invalid name";
        }
    }
?>