<?php
function getPostWithDetails($postId) {
    $post;
    global $conn;
    $sql = "
        SELECT 
            p.id AS post_id,
            p.title,
            p.description,
            p.publish_date,
            p.image_url,
            u.username,
            c.name AS category_name
        FROM 
            posts p
        JOIN 
            users u ON p.author_id = u.id
        JOIN 
            categories c ON p.category_id = c.id
        WHERE 
            p.id = ?
    ";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $postId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
           $post =$row;
        }
    } else {
        echo "No post found with ID: " . $postId;
    }

    mysqli_stmt_close($stmt);
    return $post;
}


?>