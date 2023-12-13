<?php 
    try {
        $dsn = "pgsql:host=localhost;port=5432;dbname=practica1;";
        $username = "alejandro";
        $password = "postgres";
    
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $query = "INSERT INTO empleados(clave, nombre, direccion, telefono)
                  VALUES(:clave, :nombre, :direccion, :telefono)";
    
        $statement = $pdo->prepare($query);
    
        $parameters = [
            ':clave' => $_REQUEST['clave'],
            ':nombre' => $_REQUEST['nombre'],
            ':direccion' => $_REQUEST['direccion'],
            ':telefono' => $_REQUEST['telefono']
        ];
    
        $result = $statement->execute($parameters);
    
        if ($result) {
            echo "<h1 style = 'font-family:  Arial, Helvetica, sans-serif'>Se registró el empleado.</h1>";
        } else {
            echo "<h1 style = 'font-family:  Arial, Helvetica, sans-serif'>Error en la consulta.</h1>";
        }
    
        // Cerrar la conexión PDO
        $pdo = null;
    } catch (PDOException $e) {
        echo "<script>alert('" . $e->getMessage() ."')<script>";
    }



?>