<?php
include('includes/_config.php');
$page_title = "Login Page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/partials/head.php'); ?>
</head>
<body>

  <div class="wrapper">

    <?php include('includes/partials/header.php'); ?>

    <main class="login">
      <form action="#">
        <fieldset>
          <legend> Login </legend>
          <div class="form-wrapper">
            <div class="text-fields">
              <p>
                <label for="uname">Username:<abbr class="required" title="required">*</abbr></label>
                <input type="text" placeholder="Enter Username" id="uname" name="userName" pattern="[A-Za-z]{2,20}"
                  required>
              </p>

              <p>
                <label for="pword">Password:<abbr class="required" title="required">*</abbr></label>
                <input type="password" placeholder="Enter Password" id="pword" name="passWord" pattern="[A-Za-z]{2,20}"
                  required>
              </p>
            </div>

            <ul>
              <li><input type="checkbox" id="checkbox" name="checkbox" value="checkbox">
                <label>Forget Password?</label>
              </li>
              <li>
                <label>Not yet registered? Hit Register now!</label>
              </li>
            </ul>
          </div>
        </fieldset>

        <div class="button">
          <button type="submit"> Login </button>
        </div>
      </form>
    </main>

    <?php include('includes/partials/footer.php'); ?>

  </div>
</body>
</html>