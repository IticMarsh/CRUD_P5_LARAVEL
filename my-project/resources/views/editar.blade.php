<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar un usuari</h1>
<form action={{'/prof/'.$prof['id']}} method="post">
    @method('put')
    @csrf
    <label for="nom">Nom</label>
    <input type="text" name="name" value={{$prof['name']}} required/>
    <br>
    <label for="cognoms">Cognoms</label>
    <input type="text" name="cognom" value={{$prof['cognom']}} required/>
    <br>
    <label for="password">Contrasenya</label>
    <input type="password" name="password" required/>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" value={{$prof['email']}} required/>
    <br>
    <label for="rol">Rol</label>
        <select name="rol">
            <option value="Professor">Professor</option>
            <option value="Alumne">Alumne</option>
            <option value="Centre">Centre</option>
        </select>
    <br>
    <label for="actiu">Actiu</label>
        <select name="actiu">
            <option value="1">Si</option>
            <option value="2">No</option>
        <select>
    <br>
    <input type="submit" value="Modifica"/>
    <br>
</form>
    
</body>
</html>

