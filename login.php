<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Admin</title>
</head>
<body>
    <div class="login-box">
      <img src="img/logo_login.png" class="avatar" alt="unimar image">
      <h1>ADMINISTRACION PQRS</h1>
      <form action="includes/loguear.php" method="POST">
        <!-- USERNAME INPUT -->
        <label for="username">Usuario</label>
        <input type="text" name="usuario" >
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name="contraseña" >
        <input type="submit" value="Entrar">
        <a href="#">no recuerda la contraseña?</a><br>
        <a href="#">no recuerda su cuenta?</a>
      </form>
    </div>
</body>
</html>