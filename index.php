<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php_Lessons</title>
</head>

<body>
    <form method="get">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>
    <?php
    // $name = $_GET['person'];
    // echo $name . " is a php beginner.";
    // php functions
    // echo strlen("How many spaces?");
    // echo str_word_count("How many words?");
    // print strrev("LawaL MallaM");
    /*
        php operaators
        + - * / % 
        ** - Exponential
    */
    /*
        php logical operators
        "or" or ||
        "and" or &&
        "xor" -only one conition must be true
    */
    $x = 20;
    $y = 30;
    if ($x == $y && 1 == 1) {
        echo "true";
    } else {
        echo "false";
    }

    ?>
</body>

</html>