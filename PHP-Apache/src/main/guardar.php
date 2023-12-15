<?php 
    try {
        $dsn = "pgsql:host=172.17.0.2;port=5432;dbname=postgres;";
        $username = "postgres";
        $password = "ajxy2381";
    
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
            echo "Todo bien";
        } else {
            echo "Algo salió mal";
        }
    
        // Cerrar la conexión PDO
        $pdo = null;
    } catch (PDOException $e) {
        echo "<script>alert('" . $e->getMessage() ."')<script>";
    }



?>