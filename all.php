<?php


include('database_connection.php');

?>

<!DOCTYPE html>
<html lang="">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href = "nav.js" rel = "stylesheet">

    <title>Все курсы</title>

    <script src="../StudyUp/js/jquery-1.10.2.min.js"></script>
    <script src="../StudyUp/js/jquery-ui.js"></script>
    <script src="../StudyUp/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../StudyUp/css/bootstrap.min.css">
    <link href = "../StudyUp/css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="../StudyUp/css/style.css" rel="stylesheet">
</head>
<div class="header1">
    <div class="logo">
        <a href="main.php"> <img src="image/logo.jpg" alt="logo" height="60" width="290"></a>
    </div>
    <div class="addLogin">
        <div ><a class="cta" href="index3.php"> Добавить курс </a></div>
        <div style="margin-left: 50px" ><a class="cta" href="register.php"> Войти </a></div>
    </div>
</div>

<header>
    <ul class="nav__links">
        <li><a href="all.php"> Все онлайн курсы    </a></li>
        <li><a href="vocab.php"> Авторский курс   </a></li>
        <li><a href="#"> Все бесплатные курсы </a></li>
        <li><a href="#"> Узнать больше...     </a></li>
    </ul>
    <p onclick="openNav()" class="menu cta">Menu</p>
</header>
<div id="mobile__menu" class="overlay">
    <a class="close" onclick="closeNav()">&times;</a>
    <div class="overlay__content">
        <a href=""> Все онлайн курсы   </a>
        <a href=""> Авторский курс  </a>
        <a href=""> Все бесплатные курсы  </a>
        <a href="">  Узнать больше...</a>
    </div>
</div>
<script type="text/javascript" src="nav.js"> </script>

<body>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <br />
        <h2 align="center">Все курсы</h2>
        <br />
        <div class="col-md-3">
            <div class="list-group">
                <h3>Цена</h3>
                <input type="hidden" id="hidden_minimum_price" value="0" />
                <input type="hidden" id="hidden_maximum_price" value="65000" />
                <p id="price_show">1000 - 65000</p>
                <div id="price_range"></div>
            </div>
            <div class="list-group">
                <h3>Тип курса:</h3>
                <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                    <?php

                    $query = "SELECT DISTINCT(product_brand) FROM product WHERE product_status = '1' ORDER BY product_id DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                        ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['product_brand']; ?>"  > <?php echo $row['product_brand']; ?></label>
                        </div>
                        <?php
                    }

                    ?>
                </div>
            </div>

            <div class="list-group">
                <h3>Дополнительно:</h3>
                <?php

                $query = "
                    SELECT DISTINCT(product_ram) FROM product WHERE product_status = '1' ORDER BY product_ram DESC
                    ";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['product_ram']; ?>" > <?php echo $row['product_ram']; ?></label>
                    </div>
                    <?php
                }

                ?>
            </div>

            <div class="list-group">
                <h3>КАТЕГОРИИ</h3>
                <?php
                $query = "
                    SELECT DISTINCT(product_storage) FROM product WHERE product_status = '1' ORDER BY product_storage DESC
                    ";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['product_storage']; ?>"  > <?php echo $row['product_storage']; ?></label>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="col-md-9">
            <br />
            <div class="row filter_data">

            </div>
        </div>
    </div>

</div>
<style>
    #loading
    {
        text-align:center;
        background: url('loader.gif') no-repeat center;
        height: 150px;
    }
</style>

<script>
    $(document).ready(function(){

        filter_data();

        function filter_data()
        {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            var action = 'fetch_data';
            var minimum_price = $('#hidden_minimum_price').val();
            var maximum_price = $('#hidden_maximum_price').val();
            var brand = get_filter('brand');
            var ram = get_filter('ram');
            var storage = get_filter('storage');
            $.ajax({
                url:"fetch_data.php",
                method:"POST",
                data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
        }

        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function(){
            filter_data();
        });

        $('#price_range').slider({
            range:true,
            min:1000,
            max:65000,
            values:[1000, 65000],
            step:500,
            stop:function(event, ui)
            {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });
    });
</script>
</body>
<!-- ======= Footer ======= -->
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>О проекте </h3>
                    <ul>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Курсы</a></li>
                        <li><a href="#">Помощь</a></li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-3 item">
                    <h3>Узнать больше...</h3>
                    <ul>
                        <li><a href="#">moldirkuanyshbayeva@gmail.com</a></li>
                        <li><a href="#"> shyrai2002@gmail.com</a></li>
                        <li><a href="#">Условия пользования сайтом</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Study Up</h3>
                    <p>Онлайн-курсы. Занимайся самостоятельно по интерактивным курсам. Чем больше узнаешь, тем сильнее станешь.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Study Up © 2021</p>
        </div>
    </footer>
</div>
</html>
