<?php
global $conn;

function getCategories() {
    global $conn;
    $sql = "SELECT * FROM newsdb.categories";
    $result = mysqli_query($conn, $sql);

    $categories = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
    }
    return $categories;
}
?>
