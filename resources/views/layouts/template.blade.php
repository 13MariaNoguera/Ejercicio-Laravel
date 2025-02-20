<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Examen Laravel')</title>

    <style>

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
         
        body {
            width: 100vw;
            height: 100vh;
        }

        .cabecera, .contenido, .footer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .cabecera {
            height: 10%;
            background-color: #3F51B5;
            color: white;
            position: relative;
        }

        .contenido {
            height: 85%;
        }

        .footer {
            height: 5%;
            background-color: #3F51B5;
            color: white;
        }

        .formContainer {
            display: flex;
        }

        .libroContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 50px;
        }

        .portadaContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .img {
            width: 250px;
        }

        .contenidoContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .tituloLibro {
            color: #3F51B5;
        }

        .libro {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }
        
        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #E3E3E3;
            width: 280px;
            height: auto;
            border-radius: 7px;
            padding: 30px;
        }

        .formContent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }

        .btnContainer {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .botonesSesion {
            position: absolute;
            top: 27px;
            right: 20px;
        }

        .row {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .d-none {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column-reverse;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <header class="cabecera">
        <h1 class="titulo">@yield('cabecera', 'Login')</h1>
    </header>

    <div class="contenido">
        @yield('contenido')
    </div>
    
    <footer class="footer">
        <p>Hecho por María Noguera</p>
    </footer>

</body>
</html>