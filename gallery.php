<?php
include('includes/_config.php');
$page_title = "Gallery Page";
$current = "td-gallery";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/partials/head.php'); ?>
</head>
<body class= <?php echo $current; ?>>

  <div class="wrapper">

  <?php include('includes/partials/header.php'); ?>

    <main class="gallerypage">
      <div class="gallery">
        <figure>
          <img src="assets/img/gallery1.jpg" width="250" height="250" alt="Random Lorem Picsum">
          <figcaption> Sample Photo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, provident?</figcaption>
        </figure>
        <figure>
          <img src="assets/img/gallery2.jpg" width="250" height="250" alt="Random Lorem Picsum">
          <figcaption> Sample Photo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, provident?</figcaption>
        </figure>
        <figure>
          <img src="assets/img/gallery3.jpg" width="250" height="250" alt="Random Lorem Picsum">
          <figcaption> Sample Photo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, provident?</figcaption>
        </figure>
        <figure>
          <img src="assets/img/gallery4.jpg" width="250" height="250" alt="Random Lorem Picsum">
          <figcaption> Sample Photo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, provident?</figcaption>
        </figure>
        <figure>
          <img src="assets/img/gallery5.jpg" width="250" height="250" alt="Random Lorem Picsum">
          <figcaption> Sample Photo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, provident?</figcaption>
        </figure>
        <figure>
          <img src="assets/img/gallery6.jpg" width="250" height="250" alt="Random Lorem Picsum">
          <figcaption> Sample Photo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, provident?</figcaption>
        </figure>
      </div>
    </main>

    <?php include('includes/partials/footer.php'); ?>

  </div>
</body>
</html>