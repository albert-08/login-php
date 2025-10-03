<?php
  require_once './header.php';
?>
<h1>Home Page</h1>
<p>Welcome to the home page <?= $_SESSION["username"] ?>!</p>
<?php
  require_once './footer.php';
?>