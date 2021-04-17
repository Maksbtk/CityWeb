<!DOCTYPE html>
<html lang="en">


<head>
    <?php 
    require_once "functions/functions.php";
    $product = getProduct(5);
    ?>
    <meta charset="UTF-8">
    <title>test</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>



<body>

    <header>



        <div class="header_LOGO">
            <img class="logo" src="images/logo.svg">
        </div>

        <nav>
            <div class="topnav" id="myTopnav">
                <a htref="#">Каталог</a>
                <a htref="#">Блогеры и Бренды</a>
                <a htref="#">Гейминг</a>
                <a htref="#">Фильмы и ТВ</a>
                <a htref="#">Контакты</a>
                <a htref="#" id="menu" class="icon">&#9776;</a>
            </div>

            <div class="basket" id="myBasket">
                <a class="trash-container" htref=""><span class="trash-title">Корзина</span><img class="trash-logo"
                        src="images/basket.svg"></a>
            </div>

        </nav>



    </header>

    <main>

        <?php

        $prod = json_encode($product);

        ?>
            <script>
            var myProd = <?php echo $prod; ?>;
            </script>
     
        <div class="content">

            <div class="cssSlider">
                <ul class="thumbnails" id="thumbnailss">
                    <li id="1"><a href="#slide1">   <img src="images/n1.png" /></a></li>
                    <li id="2"><a href="#slide2"> <img src="images/n2.png" /></a></li>
                    <li id="3"><a href="#slide3">  <img src="images/n3.png" /></a></li>
                    <li id="4"><a href="#slide4">  <img src="images/n4.png" /></a></li>
                    <li id="5"><a href="#slide5">  <img src="images/n5.png" /></a></li>
                </ul>
                <ul  class="slides" >
                    <li id="slide1"><img src="images/n1.png" alt="" /></li>
                    <li id="slide2"><img src="images/n2.png" alt="" /></li>
                    <li id="slide3"><img src="images/n3.png" alt="" /></li>
                    <li id="slide4"><img src="images/n4.png" alt="" /></li>
                    <li id="slide5"><img src="images/n5.png" alt="" /></li>
                </ul>

            </div>

        </div>

        <div class="param">

          

            <div class="subtitle">Мужская футболка хлопок</div>
          <!--  <div class="titletext">Рюкзак «Свет очей моих волшебных»</div> -->
          <div class="titletext" id="textTitle">  </div>


            
            <div class="text-size-block">
                <div class="choose-size">Выберите размер</div>
                <div class="table-size"><a  class="table-size-text" htref="#">Таблица размеров</a></div>
            </div>
            <div class="size-container">

                <div class="container">
                    <ul onclick="window.app.clickSize(event)" class="checkbox" id="sizes">
                        <li id="xs">XS</li>
                        <li id="s">S</li>
                        <li id="m">M</li>
                        <li id="l">L</li>
                        <li id="xl">XL</li>
                        <li id="more-size"><img src="images/3p.svg" alt="" /></li>
                    </ul>
                </div>
            </div>


            <div class="choose-color">Выберите цвет</div>
            <div class="container-color">
                <div class="checkbox-color" id="colors" onclick="window.app.clickColor(event)">
                    <div class="white-col d-flex" id="white"><div class="active-color" style="display: none"></div></div>
                    <div class="black-col d-flex"  id="black"><div class="active-color" style="display: none"></div></div>
                    <div class="red-col d-flex"  id="red"><div class="active-color" style="display: none"></div></div>
                    <div class="yelow-col d-flex"  id="yellow"><div class="active-color" style="display: none"></div></div>
                    <div class="blue-col d-flex" id="blue" ><div class="active-color" style="display: none"></div></div>
                    <div class="orange-col d-flex"  id="orange"><div class="active-color" style="display: none"></div></div>
                    <div class="green-col d-flex" id="green"><div class="active-color" style="display: none"></div></div>
                    <div class="gray-col d-flex" id="gray"><div class="active-color" style="display: none"></div></div>
                </div>
            </div>


            <div class="buy">
                <div class="price" id="myPrDis">1200₽</div>
                <div class="discount">–34%</div>
                <div class="busk"><img src="images/busk.svg" alt="" /></div>
                
            </div>
            <div class="price-disk" id="myPrice"></div>

        </div>
    </main>

    <script src="scrypt.js"></script>
</body>


</html>