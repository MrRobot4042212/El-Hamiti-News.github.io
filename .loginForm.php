<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redactores EHN</title>
    <link rel="shortcut icon" href="./data/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/styles.css">

</head>
<body>
    <section class="verificacion">
        <a class="logo"><img src="./data/img/logo.png" alt="company logo" ></a>
        <h1 class="textRedactores">Login redactores</h1>
        <form action="./.loginFormPost.php" method="post">
            <label for="username">Usuario:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Iniciar sesión">
        </form>
    </section> 
</body>
</html>