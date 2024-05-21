<?php
$to = 'meorbass@gmail.com';
$subject = 'Bienvenido a la newsletter de El Hamiti News';

$headers['From'] = 'info@elhamiti.local';
$headers['MIME-Version'] = 'MIME-Version: 1.0';
$headers['Content-type'] = 'text/html; charset=iso-8859-1'

$message = '
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">+
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>EHN Newsletter Email</title>
    <style>      
        body{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-template-rows: auto;
        grid-column-gap: 0px;
        grid-row-gap: 30px;
        background-color: #1a2c32;
        align-items: center;
        align-content: center;
        justify-content: center;
        margin: 50px;
        }

        header{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            grid-area: 1 / 1 / 1 /8;
            align-items: center;
            align-content: center;
            justify-content: center;
            border-bottom: white 2px solid;
        }
        .headerTxt{
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
        }

        .headerTxt *{
            color: white;
            text-align: center;
            font-family: "montserrat";
        }

        header img{
            max-width: 300px;
            min-width: 150px;

        }

        main{
            grid-area: 2 / 1 / 2 /8;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;  
            row-gap: 30px;  
        }
        .row1{
            background-color: rgb(59, 117, 127,1);
            width: 100%;
            padding: 50px 0px;
        }
        .row1 *{
            color: white;
            text-align: center;
            font-family: "montserrat";
        }

        .row2{
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .row2 *{
            color: white;
            text-align: center;
            font-family: "montserrat";
        }
        .row3{
            width: 100%;
            padding: 50px 0px;
            border-bottom: 2px white solid;
        }
        .row3 *{
            color: white;
            text-align: center;
            font-family: "montserrat";
        }

        footer{
            grid-area: 5 / 1 / 6 / 8;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: center;
            justify-content: center;
            column-gap: 30px;
        }

        footer *{
            color: white;
            text-align: center;
            font-family: "montserrat";
        }
 


    </style>
</head>
<body>
    <header>
        <img src="https://drive.google.com/file/d/1wqDosVCvGH_1alK98JXvzqfgPYVWmfeG/preview">
        <div class="headerTxt">
            <h1>ElHamiti News</h1>
            <h2>"Tu fuente de noticias tecnológicas de vanguardia"</h2>
        </div>
    </header>

    <main>
        <section class="row1">
            <h1>¡Gracias por tu suscripcion a nuestra newsletter!</h1>
        </section>
        <section class="row2">
            <h2>¿Por que suscribirse a nuestra newsletter?</h2>
            <p>
                <b>Mantente al día:</b> Recibirás las últimas noticias y actualizaciones sobre tecnología directamente en tu bandeja de entrada. Esto te permite estar al tanto de los últimos avances, lanzamientos de productos, eventos y tendencias en el mundo de la tecnología.
            </p>
        </section>
        <section class="row3">
            <h1>
                ¡Buenos dias del equipo EHN!
            </h1>
        </section>
    </main>

    <footer>
        <p> El Hamiti News S.A &copy;2024 </p>
        <p>Todos los derechos reservados</p>
        <aside class="mediaIconos">
            <a href="https://github.com/MrRobot4042212/Elhamiti.Inc">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a>
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
            </a>
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            </a>
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 7.082c1.602 0 1.792.006 2.425.035 1.627.074 2.385.845 2.46 2.459.028.633.034.822.034 2.424s-.006 1.792-.034 2.424c-.075 1.613-.832 2.386-2.46 2.46-.633.028-.822.035-2.425.035-1.602 0-1.792-.006-2.424-.035-1.63-.075-2.385-.849-2.46-2.46-.028-.632-.035-.822-.035-2.424s.007-1.792.035-2.424c.074-1.615.832-2.386 2.46-2.46.632-.029.822-.034 2.424-.034zm0-1.082c-1.63 0-1.833.007-2.474.037-2.18.1-3.39 1.309-3.49 3.489-.029.641-.036.845-.036 2.474 0 1.63.007 1.834.036 2.474.1 2.179 1.31 3.39 3.49 3.49.641.029.844.036 2.474.036 1.63 0 1.834-.007 2.475-.036 2.176-.1 3.391-1.309 3.489-3.49.029-.64.036-.844.036-2.474 0-1.629-.007-1.833-.036-2.474-.098-2.177-1.309-3.39-3.489-3.489-.641-.03-.845-.037-2.475-.037zm0 2.919c-1.701 0-3.081 1.379-3.081 3.081s1.38 3.081 3.081 3.081 3.081-1.379 3.081-3.081c0-1.701-1.38-3.081-3.081-3.081zm0 5.081c-1.105 0-2-.895-2-2 0-1.104.895-2 2-2 1.104 0 2.001.895 2.001 2s-.897 2-2.001 2zm3.202-5.922c-.397 0-.72.322-.72.72 0 .397.322.72.72.72.398 0 .721-.322.721-.72 0-.398-.322-.72-.721-.72z"/></svg>
            </a>
        </aside>

    </footer>

    
</body>
</html>
';

$result = mail($to, $subject, $message, $headers);

if ($result) {
    echo 'Success!' . PHP_EOL;
} else {
    echo 'Error.' . PHP_EOL;
}