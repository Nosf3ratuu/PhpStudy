<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-1 {background-color: red;}
        .body-2 {background-color: aquamarine;}
        .body-3 {background-color: lightsalmon;}
        .body-4 {background-color: burlywood;}
        .body-5 {background-color: papayawhip;}
    </style>
</head>
<body class="body-<?php echo rand(1,5);?>">
    <?php echo '<h1> Hello from PHP!</h1>'; ?>
</body>
</html>