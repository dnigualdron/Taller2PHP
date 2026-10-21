<!-- Simular una base de datos mediante un array asociativo el cuál debe contener 5
instancias, cada una debe contener como mínimo 5 datos. Posteriormente recorrer
el arreglo para mostrar la información en pantalla utilizando el formato de php en
HTML. -->

<?php

$clientes = [
    ['nombre' => 'Daniela',
    'apellido' => 'Gualdron',
    'edad' => 20,
    'tipo de sangre' => 'A+',
    'eps' => 'Nueva Eps'],

    ['nombre' => 'Ale',
    'apellido' => 'Muñoz',
    'edad' => 19,
    'tipo de sangre' => 'A+',
    'eps' => 'Nueva Eps'],

    ['nombre' => 'Miguel',
    'apellido' => 'Maldonado',
    'edad' => 17,
    'tipo de sangre' => 'A+',
    'eps' => 'Nueva Eps'],

    ['nombre' => 'Manuel',
    'apellido' => 'Patarroyo',
    'edad' => 29,
    'tipo de sangre' => 'A+',
    'eps' => 'Nueva Eps'],

    ['nombre' => 'Omar',
    'apellido' => 'Sanchez',
    'edad' => 20,
    'tipo de sangre' => 'A+',
    'eps' => 'Nueva Eps']
];

// echo "<pre>";
// var_dump($cliente);
// echo "</pre>";

foreach($clientes as $cliente){
    ?>

    <li class="lista;">
        <p> Su nombre es: <?php echo $cliente["nombre"]; ?> </p>
        <p> Su apellido es: <?php echo $cliente["apellido"]; ?> </p>
        <p> Su edad es: <?php echo $cliente["edad"]; ?> </p>
        <p> Su tipo de sangre es: <?php echo $cliente["tipo de sangre"]; ?> </p>
        <p> Su eps es: <?php echo $cliente["eps"]; ?> </p>
    </li>

    <?php
}