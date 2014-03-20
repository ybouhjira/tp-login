<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Login</h1>
  <div class="form-container">

    <? if(isset($_GET['error'])) : ?>
      <div class="error">Invalid username or password</div>
    <? endif; ?>

    <form action="login.php" method="post" name="loginForm">
      <div class="input-group">
        <label> Username </label>
        <input type="text" name="username">
      </div>

      <div class="input-group">
        <label> Password </label>
        <input type="password" name="password">
      </div>

      <div class="checkbox">
        <label>
          <input type="checkbox" name="rememberme"> Remember me
        </label>
      </div>

      <div class="center">
        <button type="submit">submit</button>
      </div>
    </form>
  </div>
</body>
</html>
