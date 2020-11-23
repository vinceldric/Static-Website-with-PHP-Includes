<?php
include('includes/_config.php');
$page_title = "Contact Page";
$current = "td-contact";
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <?php include('includes/partials/head.php'); ?>

</head>
<body class= <?php echo $current; ?>>

  <div class="wrapper">

  <?php include('includes/partials/header.php'); ?>

    <main class="contact">
      <div class="contain">

        <div class="wrap">
          <div class="header">
            <img class="image" src="assets/img/emp1.jpg" alt="Jane Doe" height="105px" width="107px">
          </div>
          <h2>Jane Doe</h2>
          <h4> CEO </h4> <br>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium suscipit at libero molestiae eius
            velit quidem veniam accusantium iure placeat a cupiditate maxime, ut eos? Ullam, at unde voluptates veniam
            quae quaerat ut excepturi ex? </p>
          <div class="foot">
            <a class="icon" href="https://github.com"><i class="fab fa-github-square"
                style="font-size: 35px;"></i></i></a>
            <a class="icon" href="https://facebook.com"><i class="fab fa-facebook-square"
                style="font-size: 35px;"></i></a>
            <a class="icon" href="https://instagram.com"><i class="fab fa-instagram-square"
                style="font-size: 35px;"></i></a>
            <a class="icon" href="https://twitter.com"><i class="fab fa-twitter-square"
                style="font-size: 35px;"></i></a>
          </div>
        </div>

        <div class="wrap">
          <div class="header">
            <img class="image" src="assets/img/emp2.jpg" alt="Mike Ross" height="105px" width="107px">
          </div>
          <h2>Mike Ross</h2>
          <h4> QA Engineer </h4> <br>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium suscipit at libero molestiae eius
            velit quidem veniam accusantium iure placeat a cupiditate maxime, ut eos? Ullam, at unde voluptates veniam
            quae quaerat ut excepturi ex? </p>
          <div class="foot">
            <a class="icon" href="https://github.com"><i class="fab fa-github-square"
                style="font-size: 35px;"></i></i></a>
            <a class="icon" href="https://facebook.com"><i class="fab fa-facebook-square"
                style="font-size: 35px;"></i></a>
            <a class="icon" href="https://instagram.com"><i class="fab fa-instagram-square"
                style="font-size: 35px;"></i></a>
            <a class="icon" href="https://twitter.com"><i class="fab fa-twitter-square"
                style="font-size: 35px;"></i></a>
          </div>
        </div>

        <div class="wrap">
          <div class="header">
            <img class="image" src="assets/img/emp3.jpg" alt="John Doe" height="105px" width="107px">
          </div>
          <h2>John Doe</h2>
          <h4> Web Developer </h4> <br>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium suscipit at libero molestiae eius
            velit quidem veniam accusantium iure placeat a cupiditate maxime, ut eos? Ullam, at unde voluptates veniam
            quae quaerat ut excepturi ex? </p>
          <div class="foot">
            <a class="icon" href="https://github.com"><i class="fab fa-github-square"
                style="font-size: 35px;"></i></i></a>
            <a class="icon" href="https://facebook.com"><i class="fab fa-facebook-square"
                style="font-size: 35px;"></i></a>
            <a class="icon" href="https://instagram.com"><i class="fab fa-instagram-square"
                style="font-size: 35px;"></i></a>
            <a class="icon" href="https://twitter.com"><i class="fab fa-twitter-square"
                style="font-size: 35px;"></i></a>
          </div>
        </div>

      </div>
    </main>

    <?php include('includes/partials/footer.php'); ?>

  </div>
</body>
</html>