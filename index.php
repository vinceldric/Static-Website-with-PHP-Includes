<?php
include('includes/_config.php');
$page_title = "Home Page";
$current = "td-index";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/partials/head.php'); ?>
</head>
<body class= <?php echo $current; ?>>
  <div class="wrapper">

    <?php include('includes/partials/header.php'); ?>

    <main class="home">
      <div class="content">
        <h1><?php echo $site_title ?> </h1>
        <p>Dig a little hole,</p>
        <p>Plant a little seed,</p>
        <p>Wait a little while,</p>
        <p>Smoke a little weed!</p>
      </div>
    </main>

    <?php include('includes/partials/footer.php'); ?>
    
  </div>
</body>
</html>