<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>

  <title></title>

  </head>
  <body>
    <header>
      <nav>
        <a href="#">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
        </ul>
        <div>
          <?php
              if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                </form>';
              }
              else {
                echo '<form action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="E-mail...">
                  <input type="password" name="pwd" placeholder="Password...">
                  <button type="submit" name="login-submit">Login</button>
                </form>
              <a href="signup.php">Signup</a>';
              }
           ?>
      </nav>
    </header>
  </body>
