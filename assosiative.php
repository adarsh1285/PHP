<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $users = [
        "name" => "adarsh",
        "age" => "20",
        "email" => "ad@gmail.com",
        "state" => "utter pradech"
        ];

    foreach ($users as $key => $x){
        echo "<h2></h2>".$key." => ". $x;
        echo "<br>";
    }
    ?>
</body>
</html>