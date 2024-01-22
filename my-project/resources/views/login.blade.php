<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Iniciar sessió de l'usuari</h1>
<form action="/signin" method="post">
    <label for="email">Email</label>
    <input type="email" id="email" name="email"/>
    <br>
    <label for="password">Contrasenya</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="checkbox">
    <label for="remember">Remember me</label>
    <br>
    <input type="submit" name="submit">
    <br>
    <a href="crearUsuari">Crear usuari</a>
</form>
</body>
</html>