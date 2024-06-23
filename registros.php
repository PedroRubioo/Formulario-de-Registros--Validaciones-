

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user = $_POST["user"];
    $password = $_POST["password"];
    $edad = $_POST["edad"];

   
    if (empty($user) || empty($password) || empty($edad)) 
    {
        echo "Los campos son obligatorios";
        exit();
    }

  
    if (!is_numeric($edad) || $edad < 18) 
    {
        echo "Su edad debe de ser mayor de edad (18 años o más)";
        exit();
    }

   
    if ($user == "luis" && $password == "mendoza") 
    {
        echo "El registro se guardo exitosamente";
    } 
    
    else 
    {
        echo "El Usuario o la contraseña no se validarion correctamente (INTENTE DE NUEVO)";
    }
        
}
?>