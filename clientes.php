
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Plus</title>

    <link rel="stylesheet" type="text/css" href="CSS/stilos.css">
    <link rel="stylesheet" type="text/css" href="CSS/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
        <i class="fas fa-laptop-house"></i>  
        <!--i class="fas fa-desktop"></i> -->
            <h4>Digital Plus</h4>

        </div>
        <div class="options__menu">	

            <a href="home.php">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="clientes.php" class="selected">
                <div class="option">
                <i class="fas fa-user" title="Clientes"></i>
                    <h4>Clientes </h4>
                </div>
            </a>
            
            <a href="cobranza.php">
                <div class="option">
                    <i class="fas fa-dollar-sign" title="Cobranza"></i>
                    <h4>Cobranza</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                <i class="fas fa-users" title="Admin. de cobros"></i>
                    <h4>Administración de Cobros</h4>
                </div>
            </a>
            <a href="login.php">
                <div class="option">
                <i class="fas fa-sign-out-alt" title="Salir"></i>
                    <h4>Salir</h4>
                </div>
            </a>

        </div>

    </div>
    <main>
        <button >Añadir</button>
    </main>
    
    <script src="js/script.js"></script>
</body>
</html>