<?php
include('includes/_config.php');
$page_title = "Registration Page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/partials/head.php'); ?>
</head>
<body>

  <div class="wrapper">

    <?php include('includes/partials/header.php'); ?>

    <main class="reg">
      <h1> Website Coming Soon!! </h1>
      <form action="#">
        <fieldset>
          <legend> Register Here! </legend>
          <div class="form-wrapper">
            <div class="text-fields">
              <p>
                <label for="uname">Username:<abbr class="required" title="required">*</abbr></label>
                <input type="email" placeholder="Enter Username" id="uname" name="userName" required>
              </p>

              <p>
                <label for="pword">Password:<abbr class="required" title="required">*</abbr></label>
                <input type="password" placeholder="Enter Password" id="pword" name="passWord"
                  pattern="[A-Za-z0-9]{6,10}" required>
              </p>

              <p>
                <label for="cpassword">Confirm Password:<abbr class="required" title="required">*</abbr></label>
                <input type="password" placeholder="Re-enter Password" id="cpassword" name="passWord"
                  pattern="[A-Za-z0-9]{6,10}" required>
              </p>
            </div>

            <label> Be Updated!</label>
            <ul>
              <li>
                <input type="checkbox" id="checkbo1" name="checkbox" value="checkbox">
                <label>I would like to receive promotional emails</label>
              </li>
            </ul>
          </div>
        </fieldset>

        <div class="button">
          <button type="submit">Submit</button>
        </div>
      </form>
    </main>

    <?php include('includes/partials/footer.php'); ?>

  </div>
</body>
</html>