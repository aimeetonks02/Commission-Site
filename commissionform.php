<?php
  if($_POST && isset($_POST['submit'], $_POST['name'], $_POST['email'], $_POST['type'], $_POST['style'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $style = $_POST['style'];

    if(!$name) {
      $errorMsg = "Please enter your Name";
    } elseif(!$email || !preg_match("/^\S+@\S+$/", $email)) {
      $errorMsg = "Please enter a valid Email address";
    } elseif(!$style) {
      $errorMsg = "Please choose your style";
    } else {
      $to = "ratinavan@gmail.com";
      $subject = "Contact from website";
      $headers = "From: " . $email . "\r\n";
      $message = $name . " would like to order " . $type . " in the style " . $style;
      mail($to, $subject, $message, $headers);
      header("Location: notice.html");
      exit;
    }

  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Commission Request</title>
        <link rel="icon" type="image/x-icon" href="favicon.png">
        <link rel ="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <nav class="nav">
            <div class="container">
                <div class="logo">
                    <a href="homepage.html">Ratinavan's Portfolio</a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                        <li><a href="about.html">About</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="request">
        </section>

        <div id="reqform">
            <h1>Commission Request Form</h1>
            <form action="#" method="post">
                <div class="section2">
                    <label for="name">Name:</label><input type="text" name="name">
                </div>
                <div class="section2">
                    <label for="email">Email:</label><input type="text" name="email">
                </div>
                <div class="section2">
                    <h2><u>Type of drawing:</u></h2>
                    <input type="radio" name="type"><label for="type">Profile Picture(s)</label><br>
                    <input type="radio" name="type"><label for="type">Headshot</label><br>
                    <input type="radio" name="type"><label for="type">Halfbody</label><br>
                    <input type="radio" name="type"><label for="type">Fullbody</label><br>
                    <input type="radio" name="type"><label for="type">OC Reference Page</label><br>
                    <input type="radio" name="type"><label for="type">Make Me a Character</label>
                </div>
                <div class="section2">
                    <h2><u>Type of colour:</u></h2>
                    <input type="radio" name="style"><label for="style">Sketch</label><br>
                    <input type="radio" name="style"><label for="style">Lineart</label><br>
                    <input type="radio" name="style"><label for="style">Flat Colour</label><br>
                    <input type="radio" name="style"><label for="style">Fully Shaded</label>
                </div>
                <div class="section2">
                    <input type="submit" name="submit">
                </div>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>

        <script>
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('.nav').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav').removeClass('affix');
                }
            });
        </script>
    </body>
</html>