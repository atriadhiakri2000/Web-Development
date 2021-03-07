<?php require_once("include/session.php") ?>
<?php require_once("include/function.php") ?>
<?php confirmlogin(); ?>

<?php 

    if(isset($_POST["log_out"]))
    {
        Redirect_to("login.php");
    }

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>tourguidewebsite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="index.css" />
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
	</head>
	<body class="is-preload">
			<div id="wrapper">
                <div id="main">
                    <div class="inner">
                        <header id="header">
                        <a href="index.html" class="logo"><strong>Editorial</strong> 
                        <?php 
                            echo $_SESSION["user_name"];
                        ?> 
                        </a> 
                            <ul class="icons">
                                <li><a href="https://github.com/atriadhiakri2000" class=""><span class="label"><i class="fab fa-github fa-2x"></i></span></a></li>
                                <li><a href="#" class=""><span class="label"><i class="fab fa-facebook fa-2x"></i></span></a></li>
                                <li><a href="https://www.linkedin.com/in/atri-adhikari-61a31416b/" class=""><span class="label"><i class="fab fa-linkedin fa-2x"></i></span></a></li>
                                <li><a href="#" class=""><span class="label"><i class="fab fa-instagram fa-2x"></i></span></a></li>
                            </ul>
                        </header>
                        <section id="banner">
                            <div class="content">
                                <header>
                                    <h2>
                                    <?php 
                                        echo $_SESSION["user_name"];
                                    ?> 
                                    </h2>
                                    <p><strong>About Me</strong></p>
                                </header>
                                <p>A interractive Tour guiding website that lets you create a perfect travel plan and also provides you with the needed landmarks. Via this website you will get the access a proper planning based on the number of days you are willing to travel. </p>
                                <!-- <ul class="actions">
                                    <li><a href="#" class="button big">Let's Start...</a></li>
                                </ul> -->
                            </div>
                            <span class="image object">
                                <img src="images/pic10.jpg" alt="" />
                            </span>
                        </section>
                        <section>
                            <header class="major">
                                <h2>Friends</h2>
                            </header>
                            <div class="posts">
                                <article>
                                    <a href="#" class="image"><img src="images/pic17.jpg" alt="" /></a>
                                    <h3>Friend name</h3>
                                    <!-- <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p> -->
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic15.jpg" alt="" /></a>
                                    <h3>Friend name</h3>
                                    <!-- <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p> -->
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                                    <h3>Friend name</h3>
                                    <!-- <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p> -->
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                                    <h3>Friend name</h3>
                                    <!-- <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p> -->
                                    <ul class="actions">
                                        <li><a href="Mutual Friends" class="button">More</a></li>
                                    </ul>
                                </article>
                                <!-- <article>
                                    <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                                    <h3>Photo titile</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <!-- <article>
                                    <a href="#" class="image"><img src="images/pic06.jpg" alt="" height="290"/></a>
                                    <h3>Photo titile</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="actions">
                                        <li><a href="pictures.html" class="button">More</a></li>
                                    </ul> -->
                                </article> -->
                            </div>
                        </section>
                        <section>
                            <header class="major">
                                <h2>Photos</h2>
                            </header>
                            <div class="posts">
                                <article>
                                    <a href="#" class="image"><img src="images/pic17.jpg" alt="" /></a>
                                    <h3>Photo titile</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic15.jpg" alt="" /></a>
                                    <h3>Photo titile</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                                    <h3>Photo titile</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                                    <h3>Photo titile</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                                    <h3>Photo titile</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="actions">
                                        <!-- <li><a href="#" class="button">More</a></li> -->
                                    </ul>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic06.jpg" alt="" height="290"/></a>
                                    <h3>Photo titile</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="actions">
                                        <li><a href="pictures.html" class="button">More</a></li>
                                    </ul>
                                    <ul class="actions">
                                        <li><a href="#" class="button">Add More</a></li>
                                    </ul>
                                </article>
                            </div>
                        </section>
                    </div>
                </div>
                <div id="sidebar">
                    <div class="inner">
                        <!-- <section id="search" class="alt">
                            <form method="post" action="#">
                                <input type="text" name="query" id="query" placeholder="Search" />
                            </form>
                        </section> -->
                        <form name="myform" action="welcome.php" method="post">
                            <input type="submit" name = "log_out" value = "Log Out" placeholder = "Submit" >
                        </form>
                        <nav id="menu">
                            <header class="major">
                                <h2>Menu</h2>
                            </header>
                            <ul>
                                <!-- <li><a href="login.html" name = "log_out">Log Out</a></li> -->
                                <!-- <li><a href="signup.html">Sign UP</a></li> -->
                                <li><a href="friends.html">Friends</a></li>
                                <li><a href="#contacts">Connect Me :)</a></li>
                                <!-- <li><a href="forgotpassword">Forgot password :(</a></li> -->
                            </ul>
                        </nav>
                        <section>
                            <header class="major">
                                <h2>Check Out What <br/> I Like...</h2>
                            </header>
                            <div class="mini-posts">
                                <article>
                                    <a href="#" class="image"><img src="images/pic18.jpg" alt="" /></a>
                                    <h3>Food</h3>
                                    <p>
                                        <li> Dhokla </li>
                                        <li> Matar Paneer </li>
                                        <li> Butter Chicken </li>
                                    </p>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic19.jpg" alt="" /></a>
                                    <h3>Movies and TV</h3>
                                    <p>
                                        <li> Fight CLub </li>
                                        <li> The Shawshank Redemption </li>
                                        <li> The Pursuit of Happyness </li>
                                    </p>
                                </article>
                                <article>
                                    <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                                    <h3>Places</h3>
                                    <p>
                                        <li> India </li>
                                        <li> U S of A</li>
                                        <li> Japan </li>
                                    </p>
                                </article>
                            </div>
                            <!-- <ul class="actions">
                                <li><a href="liking.html" class="button">More</a></li>
                            </ul> -->
                        </section>
                        <section>
                            <header class="major contacts" id="contacts">
                                <h2>Get in touch with me</h2>
                            </header>
                            <!-- <p>302, Acharya Prafulla Chandra Rd, Amherst Street, Sealdah, Raja Bazar, Kolkata, West Bengal 700009                                </p>
                            <ul class="contact"> -->
                                <li class="icon solid fa-envelope"><a href="#"><?php 
                                        echo $_SESSION["user_email"];
                                    ?> </a></li>
                                <li class="icon solid fa-phone">(+91)98765-43210</li>
                                <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                                Nashville, TN 00000-0000</li>
                            </ul>
                        </section>
                        <footer id="footer">
                            <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a></p>
                        </footer>
                    </div>
                </div>
            </div>

    <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

	</body>
</html>


<!-- 
session for login
logout
forgot password - username, password
crud operation
Form Validation
sign up sql

login sql
sign up database in sql 
login match up with sign up
session with clicking log out 

 -->

