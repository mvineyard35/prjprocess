<?php
    //connect to database, this will work on localhost or server and eliminates need for two seperate databases.
    $db = mysqli_connect('jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pwoujcnt4s6wllpp', 'b4b6dhzkd6jsonqi', 'if3wzf1kxmj3ogrp');
    //create menu table


    $dbMenu = "CREATE TABLE IF NOT EXISTS menu (
        item VARCHAR(20) NOT NULL UNIQUE,
        price VARCHAR(10) NOT NULL,
        detail TEXT NOT NULL)";
    //execute code
    $db->query($dbMenu);

    $dbM = "INSERT INTO menu (item, price, detail) VALUES
    ('Kebab Sultani', '$26.99', 'One each steak kabab, ground beef kabab and chicken kebab servied with rice and grilled tomato'),
    ('Kebab Koobideh', '$18.99', 'ground beef kebab served with rice and grilled tomato'),
    ('Kebab Joojeh', '$17.99', 'chicken breast kabab served with rice, grilled tomato and lemon.  Can be bone-in our boneless'),
    ('Sabzi Polo Bah Mahi', '$22.99', 'Grilled salmon served with rice and herbs and lemon')";

    $db->query($dbM);
?>