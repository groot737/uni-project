<?php

$sql = "SELECT 
            p.id, 
            p.title, 
            p.description, 
            p.publish_date, 
            p.image_url, 
            p.author_id, 
            p.category_id, 
            u.username AS author_username, 
            c.name AS category_name
        FROM posts p
        JOIN users u ON p.author_id = u.id
        JOIN categories c ON p.category_id = c.id";

$result = mysqli_query($conn, $sql);

$posts = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = [
            'id' => $row["id"],
            'title' => $row["title"],
            'description' => $row["description"],
            'publish_date' => $row["publish_date"],
            'image_url' => $row["image_url"],
            'author_id' => $row["author_id"],       
            'category_id' => $row["category_id"],
            'author_username' => $row["author_username"],
            'category_name' => $row["category_name"]
        ];
    }
}


?>
