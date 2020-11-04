<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/9e218809cf.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="top">
        <img id="logo" src="img/d407e298634635.Y3JvcCwxMTkyLDkzMywxMDMsMA.jpg" alt="logo">
        <a class="nav-link" href="index.php" id="chophouse">CHOPHOUSE</a>
    </div>
    <hr class="rgba-white-light" style="margin: 0%;">
    <nav class="navbar navbar-expand-sm   navbar-light " id="nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipe.php">RECIPES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">CONTACT US <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <hr class="rgba-white-light" style="margin: 0 15%;">
    <p id="contact"><b> Contact Form </b></p>
    <div class="containers">
        <form>
            <label for="name">Name</label>
            <input type="text" id="aname" name="name" placeholder="Your name.."><br>

            <label for="ename">Email</label>
            <input type="email" id="ename" name="email" placeholder="jonsnow@example.com"><br>
            <p>
                <label for="country">Country</label><br>
                <select id="country" name="country">
                    <option value="igeria">Nigeria</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select></p>
            <p>
                <label for="message">Message</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:130px"></textarea>
            </p>

            <button id="green" onclick="send()">ENTER</button>
            <script>
                function send() {
                    alert("Message has been delivered.");
                }
            </script>
        </form>
    </div><br><br>
    <hr class="rgba-white-light" style="margin: 0 15%;"><br>
    <p class="display-4 text-center" id="#C4">
        Come visit us
    </p>
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 350px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.862982069765!2d7.498753550602281!3d9.076244893456145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b555d50eef3%3A0xd9b9c89f072a4d33!2sWootlab%20Innovations!5e0!3m2!1sen!2sng!4v1604411142092!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <footer class="page-footer font-small indigo" style="background-color: rgb(83, 81, 81); color: white;">
        <div class="container">
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="index.php" style="color: wheat;">Home</a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="recipe.php" style="color: wheat;">Recipe</a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="about.php" style="color: wheat;">ABOUT</a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="Contact.php" style="color: wheat;">Contact Us</a>
                    </h6>
                </div>
            </div>
            <hr class="rgba-white-light" style="margin: 0 15%;">
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
                <div class="col-md-8 col-12 mt-5">
                    <p style="line-height: 1.7rem">ADDRESS - 29A USUMA STREET MAITAMA, ABUJA.</p>
                    <p style="line-height: 1.7rem">OPENING HOURS - EVERYDAY : 9AM - 9PM </p>
                </div>
            </div>
            <div class="row pb-3" id="icon">
                <div class="col-md-12">

                    <div class="mb-5 flex-center">
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                        </a>
                        <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                        </a>
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                        </a>
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                        </a>
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="index.php"> Chophouse.com</a>
        </div>

    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.js.map"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.navbar-light .dmenu').hover(function() {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function() {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
    </script>
</body>

</html>