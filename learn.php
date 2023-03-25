<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <style>
        h2 {    text-align: center; }
    </style>
    <title>Document</title>
</head>
<body>
    <h2>Learning PHP</h2>
    <?php
    echo "This is really a fun to play with code.";
    function funcA($a){
        print "<br> I am function-A, called $a times";
    }
    for($i=1; $i<=10; ++$i)
        funcA($i);
    ?>
</body>
</html>