<!DOCTYPE html>
<html class="whole">
<head>
    <title>Study-Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
<div class="header1">
    <div class="logo">
        <a href="main.php"><img src="image/logo.jpg" alt="logo" height="60" width="290">
    </div>
    <div class="addLogin">
        <div><a style="color:#7373e7" class="cta" href="index3.php"> Добавить курс </a></div>
        <div style="margin-left: 50px" ><a style="color:#7373e7" class="cta" href="register.php"> Войти </a></div>
    </div>
</div>
<header>
    <ul class="nav__links">
        <li><a href="all.php"> Все онлайн курсы    </a></li>
        <li><a href="#"> Марафоны/тренинги   </a></li>
        <li><a href="#"> Все бесплатные курсы </a></li>
        <li><a href="#"> Узнать больше...     </a></li>
    </ul>
    <p onclick="openNav()" class="menu cta">Menu</p>
</header>
<div id="mobile__menu" class="overlay">
    <a class="close" onclick="closeNav()">&times;</a>
    <div class="overlay__content">
        <a href=""> Все онлайн курсы   </a>
        <a href=""> Марафоны/тренинги  </a>
        <a href=""> Все бесплатные курсы  </a>
        <a href="">  Узнать больше...</a>
    </div>
</div>
<script type="text/javascript" src="nav.js"> </script>
<body>
<center>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    $conn = mysqli_connect("localhost", "root", "", "staff");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>Добавлять и редактировать курсы могут только зарегистрированные на сайте организации/физлица - организаторы курсов. Если вы хотите разместить курс, но вам высвечивается данное предупреждение, то скорее всего вы зарегистрировались как пользователь сайта, который ищет курсы. Чтобы получить возможность размещать курсы обратитесь к администраторам сайта.</h3>";

    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>

    <form class="guruweba_example_form" name="feedback" method="POST" action="/feedback.php">
        <div class="guruweba_example_caption">Обратная связь</div>
        <div class="guruweba_example_infofield">Тема обращения</div>
        <select name="theme" required="required">
            <option value="">Выберите вариант</option>
            <option>Вопрос по работе сервиса</option>
            <option>Помощь в оформлении заказа</option>
            <option>Сотрудничество</option>
            <option>Пожелания / предложения</option>
        </select>
        <div>Ваше имя</div>
        <input type="text" name="name" required="required">
        <div>Ваш email</div>
        <input type="email" name="email" required="required">
        <div>Сообщение</div>
        <textarea name="message"></textarea>
        <input type="submit" name="submit_btn" value="Отправить">
    </form>



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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script><!-- End Footer -->
</body>
</html>