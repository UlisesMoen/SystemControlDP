<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">

</head>
<body>
    <form action="login.php" method="post">

    <img class="logo" src="IMG/logo_form12.png" alt="">
        <h2>Digital_PLus</h2><br>
        
        <?php if (isset($_GET['error'])) { 
            ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php  } ?>
        
        <input type="text" name="Admin" placeholder="Usuario"><br>
        
        <input type="password" name="12345" placeholder="Contraseña"><br>

        <button type="submit"> Entrar </button>
    </form>
    
</body>
</html>