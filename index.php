<?php require("connect.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Basic Blog Framework</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <h1>Basic Blog Framework</h1>
        <?php
            $result = mysqli_query($connect, "SELECT * FROM `posts`;");
            while ($post = mysqli_fetch_array($result)) {
                echo "<a href='post.php?id=" . $post['id'] . "'>" . $post['title'] . "</a>";
            }
        ?>
        <script src="js/functions.js"></script>
    </body>
</html>
