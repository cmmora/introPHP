<?php 
$paises = [

    'Colombia'  => ['Medellín', 'Popayán', 'Cali'],

    'USA'       => ['New york', 'Virginia', 'Oregon'],

    'Perú'      => ['Iquitos', 'Piura', 'Lima'],

    'México'    => ['Queretaro', 'Michoacan', 'Veracruz'],

    'Venezuela' => ['Caracas', 'Maracaibo', 'otra']

];

var_dump($paises);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2 - Arreglo paises y ciudades</title>
</head>
<body>
    <p>Ciudades de <br><br> <?php 
        foreach ($paises as $pais => $ciudades)
    {
        echo "$pais: "."<br>";
            foreach ($ciudades as $ciudad)
            {
                echo "$ciudad, ";
            }
        
    }?> </p>
</body>
</html>