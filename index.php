<?php
require_once 'function.php';
require_once 'header.php';
?>
<div class="row text-center">
  <div class="jumbotron">
    <h1>Welcome,<?php echo ($_COOKIE["Username"] !='' ? $_COOKIE['Username'] : 'Guest');  ?></h1>
    <p>This page will grow as we add more and more components from Bootstrap...</p>
  </div>

  <p>This is another paragraph.</p>
  <p>This is a paragraph.</p>
  <p>This is another paragraph.</p>
</div>

<?php require_once 'footer.php';?>