<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "style.css">
        <title>Edit Menu</title>
    </head>
    <!--this page was created to grad ids from URLs for editing or deleting purposes-->
    <body>
        <?php 
        //connect to database
        $db = mysqli_connect('jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pwoujcnt4s6wllpp', 'b4b6dhzkd6jsonqi', 'if3wzf1kxmj3ogrp');
        //dispaly all data so an id can be pulled and sent through URL
        $menuList = mysqli_query($db, "SELECT * FROM menu");

        ?>
                <div class = "header">
            <div id = "buttons">
            <button><a href = "presentation.php">home</a></button> | <button><a href = "index.php">User View</a></button> | <button><a href = "menu.php">Edit</a></button>
            </div>
        </div>
    <table>
        <?php
            while($menuArray = $menuList->fetch_array()) {
                echo "<tr>";
                echo "<td>" .$menuArray['item'] ."</td>";
                echo "<td>" .$menuArray['price'] ."</td>";
                echo "<td>" .$menuArray['detail'] ."</td>";
                //send item id with url
                echo "<td><a href= 'edit.php?id=" .$menuArray['id'] ."'>Edit</a></td>";
                echo "<td><a href= 'delete.php?id=" .$menuArray['id'] ."'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    </body>
</html>