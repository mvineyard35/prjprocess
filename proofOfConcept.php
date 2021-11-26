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
            <button><a href = "presentation.php">home</a></button> | <button><a href = "index.php">User View</a></button>
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

    $db->query($dbM);</br></br>

    This code will be used to display the information from your database.</br></br>
    while($menuArray = $menuList->fetch_assoc()) {</br>
                    echo "p" .$menuArray['item'] ."     " .$menuArray['price'] ."/p";</br>
                    echo "p" .$menuArray['detail'] ."/p/br>/br>";</br>
                }</br></br>

    The code below will allow you to edit your information.</br></br>
    $db = mysqli_connect('jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pwoujcnt4s6wllpp', 'b4b6dhzkd6jsonqi', 'if3wzf1kxmj3ogrp');</br>

$id = $_GET['id'];</br>

$menuEdit = mysqli_query($db, "SELECT * FROM menu WHERE id= $id");</br>

$menuArray = mysqli_fetch_array($menuEdit);</br>

if(isset($_POST['update'])) {</br>
    $item = $_POST['item'];</br>
    $price = $_POST['price'];</br>
    $detail = $_POST['detail'];</br>

    $edit = mysqli_query($db, "UPDATE menu SET item = '$item', price = '$price', detail = '$detail' WHERE id='$id'");</br>

    if($edit) {</br>
        header("location:menu.php");</br>
        exit;</br>
    }
    else {</br>
        echo mysqli_error($db);</br>
    }</br>

}</br></br>

The code below will delete form your database.</br></br>
$db = mysqli_connect('jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pwoujcnt4s6wllpp', 'b4b6dhzkd6jsonqi', 'if3wzf1kxmj3ogrp');</br>

$id = $_GET['id'];</br>

$delete = mysqli_query($db, "DELETE FROM menu WHERE id = $id");</br>

if($delete) {</br>
    header("location:menu.php");</br>
    exit;</br>
}</br>
else {</br>
    echo mysqli_error($db);</br>
}</br>
    </p>
        </div>
    </body>
</html>