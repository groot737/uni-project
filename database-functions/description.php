<?php

function getDescription() {
    global $conn;
    
    $sql = "SELECT * FROM newsdb.about_description";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['description'];
        }
    } else {
        echo "მონაცემი არ მოიძებნა!";
    }
}

getDescription();
?>
