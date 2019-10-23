<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template LVL3 : Tanatos</title>
    <!-- FontAwesome script -->
    <script src="https://kit.fontawesome.com/a661f852b0.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Css Files -->
    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>
    <!-- Header -->
    <header class="background">
        <div class="overlay">

            <div class="container table">

                <!-- NavBar -->
                <div class="navbar">
                    <span>Tanatos<span>Studio</span></span>
                    <span>
                        Menu
                        <i class="fas fa-bars"></i>
                    </span>
                </div>

                <!-- Intro -->
                <div class="intro table-row">
                    <h1 class="upper">We Design <span>Things</span></h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis cumque minima commodi autem,
                        aperiam hic dolore excepturi.</p>
                    <div class="buttons">
                        <button id="hireUs" class="button upper">Hire Us</button>
                        <button id="ourWorks" class="button upper">Our Works</button>
                    </div>
                </div>

            </div>

            <div class="arrow">
                <i class="far fa-arrow-alt-circle-down"></i>
            </div>

        </div>
    </header>

    <!-- Features -->

    <section class="features">
        <div class="container">
            <div class="item">
                <i class="fas fa-print"></i>
                <h3 class="upper">Print Design</h3>
                <p>Excepteur sint occaecat cupidatat non proident, sunt culpa Maamoun Grissa</p>
            </div>
            <div class="item">
                <i class="fas fa-desktop"></i>
                <h3 class="upper">Web Design</h3>
                <p>Excepteur sint occaecat cupidatat non proident, sunt culpa Maamoun Grissa</p>
            </div>
            <div class="item">
                <i class="fas fa-tablet-alt"></i>
                <h3 class="upper">App Design</h3>
                <p>Excepteur sint occaecat cupidatat non proident, sunt culpa Maamoun Grissa</p>
            </div>
            <div class="item">
                <i class="fas fa-palette"></i>
                <h3 class="upper">Logo Design</h3>
                <p>Excepteur sint occaecat cupidatat non proident, sunt culpa Maamoun Grissa</p>
            </div>
        </div>
    </section>

    <!-- Subscribe -->

    <section class="subscribe background">
        <div class="overlay">
            <div class="container">
                <form name="subscribeForm" method="POST">
                    <div>
                        <input type="email" name="mailSub" placeholder="Enter Your email adress for newsletter">
                        <div class="errorMsg">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Please enter a valid email adress</span>
                        </div>
                    </div>
                    <input type="submit" class="button upper" value="Subscribe">
                    <div class="sucsessSubscribe">
                            <i class="fas fa-check-circle"></i><span>Email sent successfully</span>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- Our Work -->

    <section class="our-work">
        <div class="container">
            <h2 class="upper">Our <span>Works</span></h2>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco labo.<br> Designed by Maamoun Grissa</p>
            <div class="photos">
                <div class="photos-row">
                    <div class="photo-box">
                        <img src="imgs/p1.jpg" alt="Photos">
                        <div class="over">
                            <h4 class="upper">Abazoo Website</h4>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                            <button class="button upper" type="button">Show Project</button>
                        </div>
                    </div>
                    <div class="photo-box">
                        <img src="imgs/p2.jpg" alt="Photos">
                        <div class="over">
                            <h4 class="upper">Abazoo Website</h4>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                            <button class="button upper" type="button">Show Project</button>
                        </div>
                    </div>
                    <div class="photo-box">
                        <img src="imgs/p3.jpg" alt="Photos">
                        <div class="over">
                            <h4 class="upper">Abazoo Website</h4>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                            <button class="button upper" type="button">Show Project</button>
                        </div>
                    </div>
                </div>
                <div class="photos-row">
                    <div class="photo-box">
                        <img src="imgs/p4.jpg" alt="Photos">
                        <div class="over">
                            <h4 class="upper">Abazoo Website</h4>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                            <button class="button upper" type="button">Show Project</button>
                        </div>
                    </div>
                    <div class="photo-box">
                        <img src="imgs/p5.jpg" alt="Photos">
                        <div class="over">
                            <h4 class="upper">Abazoo Website</h4>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                            <button class="button upper" type="button">Show Project</button>
                        </div>
                    </div>
                    <div class="photo-box">
                        <img src="imgs/p6.jpg" alt="Photos">
                        <div class="over">
                            <h4 class="upper">Abazoo Website</h4>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                            <button class="button upper" type="button">Show Project</button>
                        </div>
                    </div>
                </div>
                <div class="photos-row hidden">
                    <div class="photo-box">
                        <img src="imgs/p1.jpg" alt="Photos">
                    </div>
                    <div class="photo-box">
                        <img src="imgs/p2.jpg" alt="Photos">
                    </div>
                    <div class="photo-box">
                        <img src="imgs/p3.jpg" alt="Photos">
                    </div>
                </div>
            </div>
            <button id="showMore" class="button upper" type="button">Show More</button>
        </div>
    </section>

    <!-- Testimonials -->

    <section class="testimonials background">
        <div class="overlay">
            <div class="container">
                <div class="client active">
                    <img src="imgs/client1.jpg" alt="Client">
                    <q>These guys are incredible! I get my project in 10 days and it was awesome!<br>
                        Very good service! Highly recommended!</q>
                    <span>John Smith</span>
                </div>
                <div class="client hidden">
                    <img src="imgs/client2.jpg" alt="Client">
                    <q>These guys are incredible! I get my project in 10 days and it was awesome!<br>
                        Very good service! Highly recommended!</q>
                    <span>Maamoun Grissa</span>
                </div>
                <div class="client hidden">
                    <img src="imgs/client3.jpg" alt="Client">
                    <q>These guys are incredible! I get my project in 10 days and it was awesome!<br>
                        Very good service! Highly recommended!</q>
                    <span>Julia Montes</span>
                </div>
                <div class="client hidden">
                    <img src="imgs/client4.jpg" alt="Client">
                    <q>These guys are incredible! I get my project in 10 days and it was awesome!<br>
                        Very good service! Highly recommended!</q>
                    <span>Petter Berry</span>
                </div>
                <i class="fas fa-chevron-right fa-2x"></i>
                <i class="fas fa-chevron-left fa-2x"></i>
            </div>
        </div>
    </section>

    <!-- Our Team -->

    <section class="our-team">
        <div class="container">
            <h2 class="upper">Our <span>Team</span></h2>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco labo.<br> Designed by Maamoun Grissa</p>
            <div class="team">
                <div class="person">
                    <img src="imgs/Person1.jpg" alt="Person">
                    <span></span>
                    <h3 class="upper">Catherina Gail</h3>
                    <div class="social">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                    <p>Ut enim ad minim veniam, quis <br> nostrud exercitation ullamco laboris </p>
                </div>
                <div class="person">
                    <img src="imgs/Person2.jpg" alt="Person">
                    <span></span>
                    <h3 class="upper">Harvey Rube</h3>
                    <div class="social">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                    <p>Ut enim ad minim veniam, quis <br> nostrud exercitation ullamco laboris </p>
                </div>
                <div class="person">
                    <img src="imgs/Person3.jpg" alt="Person">
                    <span></span>
                    <h3 class="upper">Janet Pris</h3>
                    <div class="social">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                    <p>Ut enim ad minim veniam, quis <br> nostrud exercitation ullamco laboris </p>
                </div>
                <div class="person">
                    <img src="imgs/Person4.jpg" alt="Person">
                    <span></span>
                    <h3 class="upper">Kevin Ward</h3>
                    <div class="social">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                    <p>Ut enim ad minim veniam, quis <br> nostrud exercitation ullamco laboris </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->

    <section class="contact background">
        <div class="overlay">
            <div class="container">
                <h2 class="upper">Say <span>Hello</span></h2>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco labo.<br> Designed by Maamoun Grissa</p>
                <form name="contactForm" method="POST">

                    <div class="input">
                        <div class="mailField">
                        <input type="email" name="contactMail" placeholder="Your Email">
                            <div class="contactErrorMsg">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>Please enter a valid email adress</span>
                            </div>
                        </div>
                        <input type="text" name="subject" placeholder="Subject">
                       
                    </div>

                    <textarea name="message" placeholder="Your Message"></textarea>

                    <div class="submit">
                        <input type="submit" value="HIRE US">
                        <div class="sucsessContact">
                                <i class="fas fa-check-circle"></i><span>Email sent successfully</span>
                        </div>
                        <div class="contact-social">
                            <img src="imgs/facebook.png" alt="contact-social">
                            <img src="imgs/twitter.png" alt="contact-social">
                            <img src="imgs/google-plus.png" alt="contact-social">
                            <img src="imgs/int.png" alt="contact-social">
                            <img src="imgs/be.png" alt="contact-social">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p class="upper">&copy;2019 copyright</p>
            <p class="upper">Created by Maamoun Grissa</p>
        </div>

    </footer>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/myscript.js"></script>
</body>

</html>