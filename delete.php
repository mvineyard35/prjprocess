<?php
    //connect to database
    $db = mysqli_connect('jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pwoujcnt4s6wllpp', 'b4b6dhzkd6jsonqi', 'if3wzf1kxmj3ogrp');
    //get item id from url
    $id = $_GET['id'];
    //run delete code
    $delete = mysqli_query($db, "DELETE FROM menu WHERE id = $id");
    //check for success, redirect if successful
    if($delete) {
        header("location:menu.php");
        exit;
    }
    else {
        echo mysqli_error($db);
    }
?>