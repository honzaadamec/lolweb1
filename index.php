<?php
    require "header.php";
 ?>

      <main>
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<p>Jsi odhlasen</p>';
          }
          else {
            echo '<p>Jsi prihlasen</p>';
          }
         ?>
      </main>

 <?php
     require "footer.php";
  ?>
