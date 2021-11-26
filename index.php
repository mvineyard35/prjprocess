<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "style.css">
        <title>User View</title>
        <script>
            var slideindex = 1;
            showSlides(slideindex);
            function plusSlides(x) {
                showSlides(slideindex += x);
            }
            function currenSlide(x) {
                showSlides(slideindex = x);
            }
            function showSlides(x) {
                var i;
                var slides = document.getElementsByClassName("slides");
                if(x > slides.length) {
                    slideindex = 1;
                }
                if (x < 1) {
                    slideindex = slides.length;
                }
                for(i=0; i < slides.length; i++) {
                    slides[i].style.display='none';
                }
                slides[slideindex -1].style.display = "block";
            }

        </script>
    </head>
    <body>
        <?php
            include 'dbfCreate.php';

            $menuList = mysqli_query($db, "SELECT * FROM menu");
        ?>
    <div class = "header">
            <div id = "buttons">
            <button><a href = "presentation.php">home</a></button>
            </div>
        </div>
    <div class = "main">
        <div class = "menu">


            <?php
                while($menuArray = $menuList->fetch_assoc()) {
                    echo "<p>" .$menuArray['item'] ."     " .$menuArray['price'] ."</p>";
                    echo "<p>" .$menuArray['detail'] ."</p></br></br>";
                }
            ?>
        </div>
        <div class = "slideshowContainer">
            <div class = "slides fade">
                <div class = "number">1/4</div>
                <img src = "graphic/Sultani.jpg" style = "width: 50em;">
                <div class = "text">Kebab Sultani</div>
            </div>
            <div class = "slides fade">
                <div class = "number">2/4</div>
                <img src = "graphic/koobideh.jpg" style = "width: 50em;">
                <div class = "text">Kebab Koobideh</div>
            </div>
            <div class = "slides fade">
                <div class = "number">3/4</div>
                <img src = "graphic/joojeh.JPG" style = "width: 50em;">
                <div class = "text">Joojeh Kabab</div>
            </div>
            <div class = "slides fade">
                <div class = "number">4/4</div>
                <img src = "graphic/sabzi.jpg" style = "width: 50em;">
                <div class = "text">Sabzi Polo Bah Mahi</div>
            </div>
            <a class = "prev" onclick ="plusSlides(-1)">&#10094;</a>
            <a class = "next" onclick = "plusSlides(1)">&#10095;</a>
        </div>
    </div>
    </div>
    </body>
</html>