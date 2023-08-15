<?php
require_once('..\..\private\initialize.php');
$page_title = "Subjects";
include(SHARED_PATH.'\staff_header.php');
?>

<div id="main-menu">
  <h2>Main Menu</h2>
  <ul>
    <li><a href="<?php echo url_for('\staff\subjects\index.php'); ?>">Subjects</a></li>
    <li><a href="<?php echo url_for('\staff\pages\index.php'); ?>">Pages</a></li>
  </ul>
</div>

<?php
include(SHARED_PATH.'\staff_footer.php');
?>
