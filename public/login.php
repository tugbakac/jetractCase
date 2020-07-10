<?php
    include 'header.php';
?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../bootstrap/css/formStyle.css">

<form id="login" action="../config/operation.php" method="post" class="mb-0 mt-0 pt-5 pb-5 text-center">
    <h3 class="pb-5 pt-5">User Login</h3>
    <fieldset class="pt-2 pb-2">
      <input placeholder="Your E-mail" type="email" name="UserMail" tabindex="1" required>
    </fieldset>
    <fieldset class="pt-2 pb-2">
      <input placeholder="Your Password" type="password" name="UserPassword" tabindex="2" required>
    </fieldset>
    <fieldset class="pt-2 pb-2">
      <button name="submit" type="submit" class="bg-warning text-dark text-uppercase font-weight-bold" id="login-submit" data-submit="...Loading">Login</button>
    </fieldset>
  </form>

    

<?php
    include 'footer.php';
?>