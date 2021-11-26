<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "style.css">
        <title>Proof of Concept</title>
    </head>
    <body>
    <div class = "header">
            <div id = "buttons">
            <button><a href = "presentation.php">home</a></button> | <button><a href = "index.php">User View</a></button> | <button><a href = "edit.php">Edit</a></button>
            </div>
        </div>
        <div class = "info">
            <p>Michael Vineyard | prjProcess | 11.25.2021</p>
        </div>
        <h1>Proof of Concept</h1>
        <div class = "content">
        <p>Below is the code that will be used to create the database and populate it with inital menu items.</p>
        <p>
    $db = mysqli_connect('jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pwoujcnt4s6wllpp	', 'b4b6dhzkd6jsonqi', 'if3wzf1kxmj3ogrp');</br>
    
    $dbMenu = "CREATE TABLE IF NOT EXISTS menu (</br>
        item VARCHAR(20) NOT NULL,</br>
        price VARCHAR(10) NOT NULL)";</br></br>

        $dbM = "INSERT INTO menu (item, price) VALUES</br>
    ('Kebab Sultani', '$26.99'),</br>
    ('Kebab Koobideh', '$18.99'),</br>
    ('Kebab Joojeh', '$17.99'),</br>
    ('Sabzi Polo Bah Mahi', '$22.99')";</br>

    $db->query($dbM);
    </p>
        </div>
    </body>
</html>