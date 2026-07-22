<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="recursos/css/style.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">

                <div class="caja__trasera-login">

                    <h3>Ya tienes una cuenta?</h3>
                    <p>Iniciar sesion para entra a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Aun no tengo una cuenta?</h3>
                    <p>Registrarse para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
<!--Formulario de login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesion</h2>
                        <input type="text" name="correo" placeholder="Correo Electronico" required>
                        <input onkeypress="ValidacionNumeros(event)" type="password" name="contrasena" placeholder="Contraseña" required>
                        
                        <button>Entrar</button>
                    </form>
                    <!--Registro-->
                    <form action="php/registroUsuario.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input onkeypress="ValidacionLetras(event)" type="text" placeholder="Nombre" name="nombre_completo" required>
                        <input type="text" placeholder="Correo Electronico" name="correo" required>
                        <input type="text" placeholder="Usuario" name="usuario" required>
                        <input onkeypress="ValidacionNumeros(event)" type="password" placeholder="Contraseña" name="contrasena" required>
                        <button>Registrarse</button>
                    </form>
                </div>
                
            
        </div>
    </main>
    <script src="recursos/js/script.js"></script>
    <script>

    function ValidacionLetras(event) {
        // Obtiene el valor del evento, en este caso, la tecla que se presiona
        const key = String.fromCharCode(event.which);
        // Expresión regular que permite solo dígitos (0-9)
        const regex = /^[a-z A-ZÑñáéíóúÁÉÍÓÚ]+$/;
        // Si la tecla no coincide con la expresión regular, se previene el evento
        if (!regex.test(key)) {
            event.preventDefault();
        }
    }
    function ValidacionNumeros(event) {
        // Obtiene el valor del evento, en este caso, la tecla que se presiona
        const key = String.fromCharCode(event.which);
        // Expresión regular que permite solo dígitos (0-9)
        const regex = /^[1-9]+$/;
        // Si la tecla no coincide con la expresión regular, se previene el evento
        if (!regex.test(key)) {
            event.preventDefault();
        }
    }
    </script>
</body>
</html>