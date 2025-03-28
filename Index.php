<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <link rel="stylesheet" href="css/Style_login.css">
    
    <title>LEXIS</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Tipo de cuenta</h1>
                <span>Seleccione el tipo de cuenta para iniciar sesión y poder registrarse</span>
                <a href="Log_Reg_Users.php" class="btn social">USUARIOS</a>
                <a href="Log_Reg_Adm.php" class="btn btn-success">Administrador</a>
                <a href="Log_Reg_Adm_Rec.php" class="btn social">RECURSOS</a>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
               <img src="assets/img/logo.png" alt="">
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido!</h1>
                    <p>Puedes elegir una opción para poder registrarte y vivir una experiencia única</p>
                    <button class="hidden" id="login">LEXIS</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>¡Hola Amigo!</h1>
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="register">Inicia sesión</button>
                </div>
            </div>
        </div>
    </div>

    <script src="scrip.js"></script>
</body>

</html>