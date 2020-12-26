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
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Turnaje</a></li>
          <li><a href="#">Kontakty</a></li>
        </ul>
        <div>
          <form action="includes/login.inc.php" method="post">
<!--post method je pro secure, je to cast kterou uzivatel nevidi, budou v nem scripty jakou jsou login logout atd..-->
            <input type="text" name="mailuid" placeholder="E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
          </form>
        <a href="signup.php">Signup</a>
          <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>
      </nav>
    </header>
  </body>
