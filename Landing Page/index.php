<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVIBUCEO</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <style>
        .content_1 {
            gap: 40px;
            padding: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .content_1 p{
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <header>
        <a href="index.php"><img src="../img/Logo Cooperativa (3).svg" alt="Logo COVIBUCEO"></a>
        <ul>
            <li><a href="inicio_sesion.php">Iniciar sesión</a></li>
        </ul>
    </header>
    <main>
        <section id="introduccion">
            <h1>Bienvenido a COVIBUCEO</h1>
            <h2>Cooperativa de vivienda y ayuda mutua del Buceo</h2>
            <div class="content_1">
                    <img src="../img/vivienda.png" alt="Imagen de la coopertiva">
                    <p class="p1">Somos una cooperativa de vivienda y ayuda mutua creada en 2017, instalada en el barrio del Buceo,
                        Montevideo. Nuestra organización surge del compromiso colectivo por construir un hogar digno,
                        accesible y sostenible para todas las familias
                        que la integran. Nuestra comunidad tiene como objetivo aparte de construir viviendas, fortalecer
                        vínculos humanos. A través del esfuerzo en conjunto y la toma de decisiones democráticas,
                        aspiramos a superar las barreras que impone el acceso individual a la vivienda. Actualmente
                        contamos con más
                        de 100 socios y 22 viviendas construidas en colaboración. Trabajamos día a día con la esperanza
                        de que a futuro podamos seguir brindando un
                        hogar digno a quienes lo necesistan.</p>
            </div>
        </section>
        <section id="registro">
            <h1>¿Quieres asociarte?</h1>
            <h3>Registrate aquí para formar parte de nuestra cooperativa</h4>
                <p>Para ingresar debes:</p>
                <ul>
                    <li>Ser residente permanente en Uruguay</li>
                    <li>No ser titular de una vivienda</li>
                    <li>Ser mayor de edad</li>
                    <li>Tener un ingreso familiar inferior a 60 U.R. (Unidad Reajustable)</li>
                    <li>Realizar con anterioridad un aporte incial de al menos $10.000</li>
                </ul>


                <form action="../php/registro.php" method="POST">
                    <h3 class="h3-center">Registrate aquí</h3>
                    <p>Los campos que contienen (*) son obligatorios</p>
                    <div>
                        <label for="name">Nombre(s) *</label>
                        <input name="name" type="text" required>
                    </div>
                    <div>
                        <label for="surname">Apellido(s) *</label>
                        <input name="surname" type="text" required>
                    </div>
                    <div>
                        <label for="ci">Cédula (sin guiones ni puntos) *</label>
                        <input name="ci" type="number" required>
                    </div>
                    <div>
                        <label for="tel">Teléfono *</label>
                        <input name="tel" type="text" required>
                    </div>
                    <div>
                        <label for="email">E-mail *</label>
                        <input name="email" type="text" required>
                    </div>
                    <div>
                        <label for="password">Contraseña</label>
                        <div id="password">
                            <input name="password" type="password" required>
                            <button class="toggle-password" type="button" onclick="cambioContraseña()">v</button> <!-- Se agrega "type=button" para que no se envíe el formulario al hacer click en el botón -->
                        </div>
                    </div>
                    <div>
                        <button class="button-100" type="submit">Enviar</button>
                    </div>
                    <div class="enlaces">
                        <a href="inicio_sesion.html">¿Ya eres socio? Inicia sesión</a>
                    </div>
                </form>
                <?php
                    if (isset($_GET['error']) && $_GET['error'] == 'existe') {
                    echo '<p style="color: red; "text-align:center";> La cédula y/o el email ya existen.</p>';
                }

                    if (isset($_GET['registro']) && $_GET['registro'] == 'exito') {
                    echo '<p style="color: green; text-align:center";>Solicitud enviada. Se le informará cuando su solicitud sea aceptada</p>'; //Mensaje que diga solicitud enviada
                }
                ?>
        </section>
    </main>
    <footer>
        <p>E-mail: covibuceo@gmail.com.uy</p>
        <p>Teléfono: 099 923 655</p>
        <p>Dirección: Gral. Rivera 4000</p>
    </footer>

    <script>
        function cambioContraseña() {
            const passwordInput = document.querySelector('input[name="password"]');
            const toggleButton = document.querySelector('.toggle-password');

            if (passwordInput.type === 'password') { // Comprueba si el input es de tipo password, es decir si oculta lo ingresado en el campo.
                passwordInput.type = 'text'; // Cambia el tipo a texto para mostrar la contraseña
                toggleButton.textContent = 'e'; // Cambia el texto a "e" que representa el icono de "esconder"
            } else {
                passwordInput.type = 'password'; // Cambia el tipo a password para ocultar la contraseña
                toggleButton.textContent = 'v'; // Cambia el texto a "v" que representa el icono de "ver"
            }
        }
    </script>
</body>

</html>