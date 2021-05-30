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
                <img src="image/logo.jpg" alt="logo" height="60" width="290">
            </div>
            <div class="addLogin">
                <div><a style="color:#7373e7" class="cta" href="index3.php"> Добавить курс </a></div>
                <div style="margin-left: 50px" ><a style="color:#7373e7" class="cta" href="register.php"> Войти </a></div>
            </div>
        </div>
        <header>
            <ul class="nav__links">
                <li><a href="all.php"> Все онлайн курсы    </a></li>
                <li><a href="vocab.php"> Авторский курс   </a></li>
                <li><a href="#"> Все бесплатные курсы </a></li>
                <li><a href="#more"> Узнать больше...     </a></li>
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
        <!-- Начало страницы -->
        <section id="hero">
            <!-- Slide  -->
            <div class="carousel-container">
                <div class="container">
                    <h2 class="animate__animated animate__fadeInDown">Study Up</h2>
                    <p class="animate__animated animate__fadeInUp"> Онлайн-курсы. Занимайся самостоятельно по интерактивным курсам. Чем больше узнаешь, тем сильнее станешь.</p>
                    <a href="#more" class="btn-get-started animate__animated animate__fadeInUp scrollto">Узнать больше...</a>
                </div>
            </div>
        </section><!-- End Hero -->
        <!-- Изучить новое сейчас -->
        <section id="about" class="about">
            <div class="container" style="margin-top: 25px">
                <div class="section-title">
                    <h5>Изучить новое сейчас </h5>
                    <p>Рекомендуемые курсы, вебинары, видео-уроки, тренинги онлайн</p>
                </div>
            </div>
        </section>
        <!-- Content Row-->
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon" ><i class="bi bi-laptop"><img width="300px" height="200px" src="https://cdn.pixabay.com/photo/2015/01/14/18/41/home-office-599475__340.jpg"></i></div>
                            <h4 class="title"><a href="index.html">Графический дизайнер - обучение с нуля до PRO</a></h4>
                            <p class="description">Разработка макетов сайта</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-briefcase"><img width="300px" height="200px" src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849821__340.jpg"></i></div>
                            <h4 class="title"><a href="game.html">Разработчик игр на Unity - курс обучения профессии</a></h4>
                            <p class="description">Участвовать в геймджемах</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar4-week"><img width="300px" height="200px" src="https://cdn.pixabay.com/photo/2018/03/19/18/20/tea-time-3240766__340.jpg"></i></div>
                            <h4 class="title"><a href="des.html">Профессия Дизайнер мобильных приложений - обучение с трудоустройством</a></h4>
                            <p class="description">UX-прототипирование</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon" ><i class="bi bi-laptop"><img width="300px" height="200px" src="https://cdn.pixabay.com/photo/2015/05/31/10/55/man-791049__340.jpg"></i></div>
                            <h4 class="title"><a href="la.html">Ландшафтный дизайн - профессиональное обучение</a></h4>
                            <p class="description">Работать с заказчиком</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-briefcase"><img width="300px" height="200px" src="https://cdn.pixabay.com/photo/2019/05/14/21/50/storytelling-4203628__340.jpg"></i></div>
                            <h4 class="title"><a href="ins.html">Продвижение в Instagram - курс инстаграм-маркетинга</a></h4>
                            <p class="description">Сотрудничать с блогерами</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar4-week"><img width="300px" height="200px" src="https://cdn.pixabay.com/photo/2017/05/01/18/40/school-2276269__340.jpg"></i></div>
                            <h4 class="title"><a href="kino.html">Как попасть в киноиндустрию - бесплатный вебинар</a></h4>
                            <p class="description">главные тенденции 2021 года</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Featured Services Section -->
        <div style="background-color: #F4F4F4; height: 30px">
        </div>
        <div style="background-color: #F4F4F4">
            <div class="container-fluid" style="width: 900px;">
                <div class="row" style="font-family: 'Algerian', sans-serif; font-size: 15px">
                    <div class="col-sm-4 " style=" display: flex; justify-content: flex-start">
                        <i class="fa fa-language" style=" justify-content: center"></i>
                        <div style="width:30px"></div>
                        <a href="URL"> Иностранные языки </a>
                    </div>
                    <div class="col-sm-4" style="display: flex; justify-content: flex-start;">
                        <i class="fa fa-laptop"></i>
                        <div style="width:30px"></div>
                        Информационные технологии
                    </div>
                    <div class="col-sm-4" style=" display: flex; justify-content: flex-start">
                        <i class="fa fa-wallet"></i>
                        <div style="width:30px"></div>
                        Бизнес
                    </div>
                </div>
                <br>
                <div class="row" style="font-family: 'Algerian', sans-serif; font-size: 15px">
                    <div class="col-sm-4 " style="display: flex; justify-content: flex-start">
                        <i class="fa fa-ad"></i>
                        <div style="width:30px"></div>
                        Маркетинг и реклама
                    </div>
                    <div class="col-sm-4" style=" display: flex; justify-content: flex-start">
                        <i class="fa fa-donate"></i>
                        <div style="width:30px"></div>
                        Экономика, финансы
                    </div>
                    <div class="col-sm-4" style=" display: flex; justify-content: flex-start">
                        <i class="fa fa-user-graduate"></i>
                        <div style="width:30px"></div>
                        Развитие личности
                    </div>
                </div>
                <br>
                <div class="row" style="font-family: 'Algerian', sans-serif; font-size: 15px">
                    <div class="col-sm-4 " style=" display: flex; justify-content: flex-start">
                        <i class="fa fa-award"></i>
                        <div style="width:30px"></div>
                        Дизайн
                    </div>
                    <div class="col-sm-4" style=" display: flex; justify-content: flex-start">
                        <i class="fa fa-camera"></i>
                        <div style="width:30px"></div>
                        Творчество и искусство
                    </div>
                    <div class="col-sm-4" style=" display: flex; justify-content: flex-start">
                        <i class="fa fa-binoculars"></i>
                        <div style="width:30px"></div>
                        Наука
                    </div>
                </div>
                <br>
                <div style="display: none" id="showblock">
                    <div  class="row" style=" font-family: 'Algerian', sans-serif; font-size: 15px">
                        <div class="col-sm-4 " style="display: flex; justify-content: flex-start">
                            <i class="fa fa-ad"></i>
                            <div style="width:30px"></div>
                            Красота и здоровье
                        </div>
                        <div class="col-sm-4"  style=" display: flex; justify-content: flex-start">
                            <i class="fa fa-donate"></i>
                            <div style="width:30px"></div>
                            Продажи
                        </div>
                        <div class="col-sm-4" style=" display: flex; justify-content: flex-start">
                            <i class="fa fa-user-graduate"></i>
                            <div style="width:30px"></div>
                            Мода
                        </div>
                    </div>
                    <br>
                    <div  class="row"  style=" font-family: 'Algerian', sans-serif; font-size: 15px">
                        <div class="col-sm-4 " style=" display: flex; justify-content: flex-start">
                            <i class="fa fa-award"></i>
                            <div style="width:30px"></div>
                            Дизайн
                        </div>
                        <div class="col-sm-4" style=" display: flex; justify-content: flex-start">
                            <i class="fa fa-camera"></i>
                            <div style="width:30px"></div>
                            Творчество и искусство
                        </div>
                        <div class="col-sm-4" style=" display: flex; justify-content: flex-start">
                            <i class="fa fa-binoculars"></i>
                            <div style="width:30px"></div>
                            Наука
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row" style="display: flex; justify-content: center; margin-bottom: 20px">
                    <div >
                        <button onClick="myFunction()" id="btnToggle" type="button" class="btn" style="background-color: rgba(20,44,138,0.67); color: white; font-size: larger; width: 200px; height: 40px">Все категории</button>
                    </div>
                </div>
                <script type="text/javascript">
                    function myFunction() {
                        var x = document.getElementById("showblock");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                    }
                </script>
            </div>
        </div>
        <!-- Новости -->
        <section id="more" class="more">
            <div class="container" style="margin-top: 25px">
                <div class="section-title">
                    <h5> Узнать больше... </h5>
                    <p>Полезные статьи, обзоры и лайфхаки</p>
                </div>
            </div>
        </section>
        <div class="container" style="display: flex; ">
            <div class="col-sm-3" style=" display:flex; justify-content: center">
                <div style="display: flex; flex-direction: column; justify-items: center; margin-top: 20px">
                    <img width="230px" height="200px" src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849822__340.jpg" alt="foto">
                    <br>
                    <p style="font-size: larger">Топ 14 лучших онлайн-курсов веб-аналитики для начинающих</p>
                </div>
            </div>
            <div class="col-sm-3" style=" display:flex; justify-content: center">
                <div style="display: flex; flex-direction: column; justify-items: center; margin-top: 20px">
                    <img width="230px" height="200px" src="https://cdn.pixabay.com/photo/2016/11/03/18/19/social-media-1795578__340.jpg" alt="foto">
                    <br>
                    <p style="font-size: larger">15 лучших IT-школ онлайн, где обучат современным специальностям</p>
                </div>
            </div>
            <div class="col-sm-3" style=" display:flex; justify-content: center">
                <div style="display: flex; flex-direction: column; justify-items: center; margin-top: 20px">
                    <img width="230px" height="200px" src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849826__340.jpg" alt="foto">
                    <br>
                    <p style="font-size: larger">Бесплатные интенсивы по программированию и маркетингу</p>
                </div>
            </div>
            <div class="col-sm-3" style=" display:flex; justify-content: center">
                <div style="display: flex; flex-direction: column; justify-items: center; margin-top: 20px">
                    <img width="230px" height="200px" src="https://cdn.pixabay.com/photo/2015/07/17/22/42/typing-849806__340.jpg" alt="foto">
                    <br>
                    <p style="font-size: larger">Топ 14 лучших онлайн школ английского языка</p>
                </div>
            </div>
        </div>
        <div style="background-color: #F4F4F4;">
            <!-- Авторский курс английского от Study Up -->
            <section id="more" class="more" style="margin-top: 30px">
                <div class="container" style="margin-top: 25px">
                    <div class="section-title">
                        <h5 style="margin-top: 20px">Изучить английский </h5>
                        <p>Курсы и занятия английским онлайн</p>
                    </div>
                </div>
            </section>
            <div class="container" >
                <div class="row" style="margin-bottom: 30px">
                    <div class="col-sm-4" style="display: flex; justify-content: center"> <img width="500px" height="200px" src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585__340.jpg" alt="learn english"> </div>
                    <div class="col-sm-8" style="display: flex; flex-direction: column">
                        <h4 style="font-size: 25px; color: #2b83ba">Learn English</h4>
                        <p style="font-size: large">Learn English Этот курс в первую очередь разработан для тех, кто собирается учиться в англоязычном вузе, но может быть полезен и для остальных любителей английского языка.</p>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script><!-- End Footer -->
        </body>
        </html>