<!-- Lenguaje Hacker
Escribe un programa que reciba un texto y transforme lenguaje natural a &quot;lenguaje
hacker&quot; (conocido realmente como &quot;leet&quot; o &quot;1337&quot;). Este lenguaje se caracteriza
por sustituir caracteres alfanuméricos. Utiliza esta tabla
(https://www.gamehouse.com/blog/leet-speak-cheat-sheet/) con el alfabeto y los
números en &quot;leet&quot;. (Usa la primera opción de cada transformación. Por ejemplo &quot;4&quot;
para la &quot;a&quot;). -->

<form action="" method="post">
    <label for="Frase"> Frase a convertir</label>
    <input type="text" name="info">
    <input type="submit" value="Enviar" name="enviar">
</form>


<?php

define('abecedario', array(
    'a' => '4',
    'b' => 'I3',
    'c' => '[',
    'd' => ')',
    'e' => '3',
    'f' => '|>=',
    'g' => '&',
    'h' => '#',
    'i' => '1',
    'j' => ',_|',
    'k' => '>|',
    'l' => '1',
    'm' => 'JVI',
    'n' => '^/',
    'o' => '0',
    'p' => '|*',
    'q' => '(_,)',
    'r' => 'I2',
    's' => '5',
    't' => '7',
    'u' => '(_)',
    'v' => '\\/',
    'w' => '\\/\\/',
    'x' => '><',
    'y' => 'j',
    'z' => '2',
    ' ' => ' ',
    ',' => ',',
    '.' => '.'
));

if (isset ($_POST["enviar"])){
    $frase = $_POST["info"];
    $frase_array = str_split(strtolower($frase));
foreach($frase_array as $letra){
    if (abecedario[$letra]){
    echo abecedario[$letra];
} else {
    echo $letra;
}
}
}


// if (isset ($_POST["enviar"])){
//     $frase = $_POST["info"];
//     /*str_split significa string - separación y strlower es para poner todo en minusculas*/
//     $frase_array = str_split(strtolower($frase));
//     /* recorre letra por letra individualmente de la variable ejemplo: $frase_array= " "h"- "o" - "l" - "a" "   
// entonces el foreach coge letra a letra indiviual primero h luego o luego l y luego a y las va guardando en 
// ese orden exacto dentro de la variable temporal que hemos creado con el as (as es un 'como') $letra 
// para despues poder verificar cada una de esas letras en ese orden dentro de la constante de array_asociativo ABECEDARIO*/

// foreach($frase_array as $letra){
//     if (abecedario[$letra]){
//     echo abecedario[$letra];
// } else {
//     /*Si hay un espacio o un punto, imprime la letra original tal cual*/
//     echo $letra;
// }
// }