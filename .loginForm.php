<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores Insert EHN</title>
    <link rel="shortcut icon" href="./data/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/styles.css">

</head>
<body>
    <section class="verificacion">
        <a class="logo"><img src="./data/img/logo.png" alt="company logo" ></a>
        <form action="./.loginFormPost.php" method="post">
            <label for="username">Usuario:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <label for="host">Host:</label><br>
                <select name="host" id="host">
                    <option value="localhost">localhost</option>
                    <option value="dmz.elhamiti.local">dmz.elhamiti.local</option>
                    <option value="10.5.2.8">10.5.2.8</option>
                </select><br><br>
            <input type="submit" value="Iniciar sesión">
        </form>
    </section> 
</body>
</html>