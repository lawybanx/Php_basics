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
        $name = $_GET['person'];
        echo $name. " is a php beginner."
    ?>
</body>

</html>