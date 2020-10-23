<?php 
include_once('database/connection.php');

include('templates/common/header.php');
?>
<section id="login">
      <h1>Login</h1>
      <form action="action_login.php" method="post">
        <label>
          Username <input type="text" name="username">
        </label>
        <label>
          Password <input type="password" name="password">
        </label>
        <input type="submit" value="Login">
      </form>
    </section>
<?php 
include('templates/common/footer.php');
?>