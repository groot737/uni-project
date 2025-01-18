<?php
function get_ad($conn, $ad_name) {
    $ad_name = mysqli_real_escape_string($conn, $ad_name);

    $query = "SELECT imageURL FROM ads WHERE name = '$ad_name'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo '<img src="' . htmlspecialchars($row['imageURL']) . '" title="რეკლამა" alt="რეკლამა">';
    } else {
        echo '<img src="templates/dailyinfo-1/img/b-baner-' . $ad_name[1] . '.png" title="რეკლამა" alt="რეკლამა">';
    }
};

function get_R1_ad($conn) {
    get_ad($conn, 'R1');
}

function get_R2_ad($conn) {
    get_ad($conn, 'R2');
}

function get_R5_ad($conn) {
    get_ad($conn, 'R5');
}
?>
