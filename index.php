<?php

include "config.php";



$sql = "SELECT * FROM equipe";
$requet =  mysqli_query($conn, $sql);
if (!$requet) {
    echo "not";
}

while ($row = mysqli_fetch_row($requet)) {
    echo "<pre>";
    print_r($row[4]);
    echo "</pre>";
}



$conn->close();
