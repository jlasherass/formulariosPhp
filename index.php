
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de formulario de alta</title>
    </head>
    <body>
        <form action="datos.php" method="POST">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Edad: <input type="number" name="edad"></p>
            <p>Ciudad: <select name="ciudad"></p>
                <option> Barcelona </option>
                <option> Girona </option>
                <option> Lleida </option>
                <option> Tarragona </option>
            </select>
            <p>Sexo:
            Hombre <input type="radio" name="sexo" value="hombre">
            Mujer <input type="radio" name="sexo" value="hombre">
            </p>
            <input type="submit" name="enviar" value="Enviar datos">           
    </body>
</html>
