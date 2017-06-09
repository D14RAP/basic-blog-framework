<?php
    require("connect.php");
    mysqli_query($connect, "CREATE TABLE `posts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `title` VARCHAR(100) NOT NULL , `date` DATETIME NOT NULL , `author` VARCHAR(100) NOT NULL , `description` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
    echo "CREATED TABLE `posts`!";
?>
