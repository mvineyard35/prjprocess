<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "style.css">
        <title>Edit</title>
    </head>
    <body>
        <?php 
        //connect to database
        $db = mysqli_connect('jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pwoujcnt4s6wllpp', 'b4b6dhzkd6jsonqi', 'if3wzf1kxmj3ogrp');
        //get desired information from url
        $id = $_GET['id'];
        //select information to edit from table
        $menuEdit = mysqli_query($db, "SELECT * FROM menu WHERE id= $id");
        //turn it into usable information
        $menuArray = mysqli_fetch_array($menuEdit);
        //check for update action and get values
        if(isset($_POST['update'])) {
            $item = $_POST['item'];
            $price = $_POST['price'];
            $detail = $_POST['detail'];
            //edit the information
            $edit = mysqli_query($db, "UPDATE menu SET item = '$item', price = '$price', detail = '$detail' WHERE id='$id'");
            //check for success and redirect
            if($edit) {
                header("location:menu.php");
                exit;
            }
            else {
                echo mysqli_error($db);
            }

        }

        ?>
        <h1>Edit Menu</h1>
    <table>
        <?php
                echo "<form method = 'POST'>";
                echo "<input type = 'text' name = 'item' value ='" .$menuArray['item'] ."' placeholder = '" .$menuArray['item'] ."'</input>";
                echo "<input type = 'text' name = 'price' value ='" .$menuArray['price'] ."' placeholder = '" .$menuArray['price'] ."'</input>";
                echo "<input type = 'textarea' name = 'detail' value ='" .$menuArray['detail'] ."' placeholder = '" .$menuArray['detail'] ."'</input>";
                echo "<input type = 'submit' name = 'update' value = 'Update'></input>";
                echo "</form>";
        ?>
    </table>
    </body>
</html>