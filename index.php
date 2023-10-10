<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
        // 1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
        
        // array para almacenar los números pares
        $numerosPares = array();
        
        for ($i = 2; $i <= 20; $i += 2) {
            $numerosPares[] = $i;
        }

        foreach ($numerosPares as $numero) {
            echo $numero . "<br>";
        }

        //2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r()
        $arrayDatos = array("Pedro", "Ana", 34, 1);
        print_r($arrayDatos);

        // 3. Crear un array asociativo e introducir los siguientes valores:
        $arrayAsociativo = array(
            "Nombre" => "Pedro",
            "Apellido" => "Torres",
            "Dirección" => "Av. Mayor 3703",
            "Teléfono" => 1122334455
        );
        
            // array asociativo con print_r()
        print_r($arrayAsociativo);
        
        // 4. array introduciendo las ciudades:
        $ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago");

        // el array se muetra un bucle foreach
        foreach ($ciudades as $indice => $ciudad) {
            echo "La ciudad con el índice $indice tiene el nombre $ciudad<br>";
        }
        
        // 5. Repite el ejercicio anterior pero ahora se ha de crear índices.
        $ciudades = array(
            "MD" => "Madrid",
            "BCL" => "Barcelona",
            "LD" => "Londres",
            "NY" => "New York",
            "LA" => "Los Ángeles",
            "CCG" => "Chicago"
        );
        foreach ($ciudades as $indice => $ciudad) {
            echo "El índice de $ciudad es $indice<br>";
        }

    ?>
</body>
</html>