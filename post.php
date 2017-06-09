<?php
    require("connect.php");
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($connect, $id);
    $result = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id` = '" . $id . "';");
    $post = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $post['title']; ?> - Basic Blog Framework</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <h1><?php echo $post['title']; ?></h1>
        <h5>By <?php echo $post['author']; ?></h5>
        <h6><?php echo $post['date']; ?></h6>
        <p><?php echo $post['description']; ?></p>
        <script src="js/functions.js"></script>
    </body>
</html>
