<!DOCTYPE html>
<html class="whole">
<head>
    <title>Study-Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="addNew.css" rel="stylesheet" media="all">
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
        <a href="main.php"><img src="image/logo.jpg" alt="logo" height="60" width="290"></a>
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
        <a href=""> Марафоны/тренинги  </a>
        <a href=""> Все бесплатные курсы  </a>
        <a href="">  Узнать больше...</a>
    </div>
</div>
<script type="text/javascript" src="nav.js"> </script>

<!-- Изучить новое сейчас -->
<section id="about" class="about">
    <div class="container" style="margin-top: 25px">
        <div class="section-title">
            <h5> Добавить новый курс </h5>
            <p>  </p>
        </div>
    </div>
</section>

<div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-body">
                <form action="insert.php" method="post" class="forma">
                    <div class="zhalpy">
                        <div class="shyrailym">
                            <div><label for="firstName" class="">Course Name:</label></div>
                            <div><input type="text" name="first_name" id="firstName"></div>
                        </div>
                        <br>
                        <div class="shyrailym">
                            <div><label for="lastName">Price:</label></div>
                            <div><input type="text" name="last_name" id="lastName"></div>
                        </div>
                        <br>
                        <div class="shyrailym">
                            <div><label for="Gender">Type of course:</label></div>
                            <div><input type="text" name="gender" id="Gender"></div>
                        </div>
                        <br>
                        <div class="shyrailym">
                            <div><label for="Gender">Загрузить фото:</label></div>
                            <div><input type="file" name="image" id="Image"></div>
                        </div>
                        <br>
                        <div class="shyrailym">
                            <div><label for="Address">Contact:</label></div>
                            <div><input type="text" name="address" id="Address"></div>
                        </div>
                        <br>
                        <div class="shyrailym">
                            <div><label for="emailAddress">Course Description:</label></div>
                            <div><input type="text" name="email" id="emailAddress"></div>
                        </div>
                        <br>
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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