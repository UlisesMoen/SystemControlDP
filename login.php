<?php 
session_start();
include "bd/conexion.php";

if(isset($_POST['Admin']) && isset($_POST['12345'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['Admin']);
    $pass = validate($_POST['12345']);

    if(empty($uname)){
        header("Location: index.php?error=Ingrese un usuario");
        exit();

    }else if(empty($pass)){
        header("Location: index.php?error=Ingrese una contraseña");
        exit();
        } else{
            $sql = "SELECT * FROM administrador WHERE admin_dg='$uname' AND clave='$pass'";
            
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['admin_dg'] === $uname && $row ['clave'] === $pass){
                        $_SESSION['admin_dg'] = $row['admin_dg'];
                       
                        header("Location: home.php");
                        exit();
                
                }else{
                    header("Location: index.php?error=Usuario o Contraseña incorrecta");
                    exit();
                }
            }else{
                header("Location: index.php?error=Usuario o Contraseña incorrecta");
                exit();
            }
        }
    
}else{
    header("Location: index.php");
    exit();
}

?>