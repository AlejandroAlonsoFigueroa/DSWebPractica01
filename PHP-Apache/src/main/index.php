<html>
    <title>Práctica 1 - PHP</title>
    <head>

        <style>
            p{
                padding: 0;
                margin: 0;
            }
            input{
                outline: none;
                all: unset;
                border: solid black 1px;
                padding: 7px 12px;
            }
            *{
                font-family: Arial, Helvetica, sans-serif;
            }

            .boton{

                outline: none;
                background-color: #004481;
                padding: 10px 20px;
                color: white;
                border: none;
            }
        </style>
    </head>

    <body>
        <div>
            <h1>Guarda un usuario</h1>
        </div>
      
        <div style = "border: solid black 1px; width: fit-content; padding: 25px;">
            <form action = "guardar.php" method = "POST">

                <div>
                    <div><p>Clave</p></div>
                    <input type = "text" name ="clave"/>
                </div>

                <div>
                    <div><p>Nombre</p></div>
                    <input type = "text" name ="nombre"/>
                </div>

                <div>
                    <div><p>Dirección</p></div>
                    <input type = "text" name ="direccion"/>
                </div>

                <div>
                    <div><p>Teléfono</p></div>
                    <input type = "text" name ="telefono"/>
                </div>

                <div style ="margin-top: 10px;">
                    <button class = "boton" type ="submit">Guardar</button>
                </div>
            </form>

        </div>
        
    </body>
</html>