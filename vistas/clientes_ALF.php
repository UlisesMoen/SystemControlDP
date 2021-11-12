<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Plus</title>

    <link rel="stylesheet" type="text/css" href="CSS/stilos.css">
    <link rel="stylesheet" type="text/css" href="CSS/stilos_popup.css">
    <link rel="stylesheet" type="text/css" href="CSS/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="JS/jquery-3.2.1.min.js"></script>
    
    
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <div class="icon__admin">
            <i class="fas fa-user-tie"></i>
            <h4>Administrador</h4>
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
                    <h4 class="sub-btn">Clientes </h4>
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
        <div>
             <h1 class="subt1">Administrar Clientes "Digital Plus" </h1><br>

        <button id="btn-abrir-popup" class="btn-cerrar-popup">Nuevo Cliente</button>
            <div class="contenedor">
		        <div class="overlay" id="overlay">
			        <div class="popup" id="popup">
				        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				            <h3 class="titulo_form"><i class="fas fa-user-plus"></i><br>Nuevo Cliente</h3><br>
          
                            <form id="frmajax" method="$_POST">
                                <div class="contenedor-inputs">
                                    <input type="text" name="nombre" id="nombre" placeholder="  Nombre:">
                                    <input type="text" name="localidad" id="localidad" placeholder="  Localidad:">
                                    <input type="text" name="ip_antena" id="ip_antena" placeholder="  IP de la Antena:">
                                    <input type="text" name="password" id="password" placeholder="  Contraseña:">
                                    <input type="number" name="megas" id="megas" placeholder="  MB en Consumo:">
                                    <input type="number" name="precio" id="precio" placeholder="  Precio a pagar:">
                                    <input type="date" name="fecha" id="fecha" placeholder="  Fecha de Pago:">
                                </div>
                                    <button id="btncrear" class="btn_crear">Crear</button> 
                                    <button type="reset" id="btn_limpiar" class="btn_limpiar">Limpiar</button> 
                                       
                            </form>
			        </div>
		        </div>
	        </div>
        </div>
    </main>

</body>
</html>

<script type="text/javascript">
        $(document).ready(function(){
            $('#btncrear').click(function(){
                var datos=$('#frmajax').serialize();
                $.ajax({
                    type:"POST",
                    url:"conndb_dg.php",
                    data:datos,
                    success:function(r){
                        if(r==1){
                            alert("Agregado con exito");
                        }else{
                            alert("Llene los campos");
                        }
                    }
                });
                return false;
            });
        });
     </script>  

     <script src="js/popup.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
