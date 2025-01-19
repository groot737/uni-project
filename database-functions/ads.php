<?php
function get_ad($conn, $ad_name, $isOnRootPage) {
    $ad_name = mysqli_real_escape_string($conn, $ad_name);

    $query = "SELECT * FROM ads WHERE name = '$ad_name'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo '<a href="'. htmlspecialchars($row['website_link']) .'"><img src="' . htmlspecialchars($row['imageURL']) . '" title="რეკლამა" alt="რეკლამა"></a>';
    } else {
        if($isOnRootPage == true){
            echo '<img src="templates/dailyinfo-1/img/b-baner-' . $ad_name[1] . '.png" title="რეკლამა" alt="რეკლამა">';
        } else{
            echo '<img src="../../templates/dailyinfo-1/img/b-baner-' . $ad_name[1] . '.png" title="რეკლამა" alt="რეკლამა">';
        }
    }
};

function get_R1_ad($conn, $isOnRootPage) {
    get_ad($conn, 'R1', $isOnRootPage);
}

function get_R2_ad($conn, $isOnRootPage) {
    get_ad($conn, 'R2', $isOnRootPage);
}

function get_R5_ad($conn, $isOnRootPage) {
    get_ad($conn, 'R5',$isOnRootPage);
}
?>
