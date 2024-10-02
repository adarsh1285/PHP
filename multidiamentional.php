<?php
    $users = [
        [1,"adarsh","varanasi","ad@gmail.com"],
        [2,"adarsh","varanasi","ad@gmail.com"],
        [3,"adarsh","varanasi","ad@gmail.com"],
        [4,"adarsh","varanasi","ad@gmail.com"]
    ];
    // echo "<pre>";
    // print_r($users);
    // echo "<pre>";

//     for ($i = 0; $i < count($users); $i++){
//         for ($j = 0; $j < count($users[$i]);$j++){
//             print_r($users[$i]);
//             echo "<br>";
//         }
//     }
    echo "<table border=1>";
    foreach($users as $user){
        echo "<tr>";
        foreach($user as $item){
            echo "<td>";
            echo $item;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>