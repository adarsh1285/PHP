
<?php
    $users = [
        [1,"adarsh","varanasi","ad@gmail.com"],
        [2,"Dipti","Mau","ad@gmail.com"],
        [3,"khushi","Ajamghad","ad@gmail.com"],
        [4,"Ankit","varanasi","ad@gmail.com"]
    ];
    echo "<table border=1>";
    for ($i = 0; $i < count($users); $i++){
        echo "<tr>";
        for ($j = 0; $j < count($users[$i]);$j++){
            echo "<td>";
            echo $users[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>