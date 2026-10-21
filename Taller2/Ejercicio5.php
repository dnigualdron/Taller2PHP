<!-- Crea una función que sea capaz de detectar si existe un viernes 13 en el mes y el
año indicados. La función recibirá el mes y el año y retornará verdadero o falso,
imprime en pantalla si es viernes 13 o no. -->

<form action="" method="post">
    <label for="mes">Digite el mes y el año</label>
    <input type="month" name="mes">
    <input type="submit" value="enviar" name="enviar">
</form>

<!-- Lo primero que hice fue hacerle el input:b con el month para que me cogiera solo el mes y el año  -->

<?php

//luego validé nuevamente con el if que se verifique si está vacio o no cuando le dan enviar y llegue por el metodo super _POST
//luego le cree una variable para ahí guardar la fecha que manda el usuario por el front - ya cuando la manda, se guarda
//luego cree una nueva variable llamada $save_day para guardar ahí la variable que mandó el usuario y concatenarle el número que nunca va a 
//cambiar que es lo que queremos indagar el viernes 13 ese 13 se lo concatenamos como un STRING, ya guardado 
//le creo otra variable llamada $find: para indicarle el nombre de la funcion e ingresar la fecha completa $save_Day esto le dice como 
//esa fecha completa se la pasa a la funcion, la funcion la arregla y la guarda en la variable. $find y luego imprime el resultado. 

if(isset($_POST["enviar"])){
    $savedate = $_POST["mes"];
    $save_day = $savedate . "-13";
    $find = verify_friday($save_day);
    echo $find;
}

//el strtotime es para pasarle a la pc el formato del mes, año y junto con el dia que le he agregado y lo convierta a lenguaje de pc
//y el date es para filtrar o buscar por dias de la semana l = friday etcc...

//le creo la funcion con el nombre que yo quiera 'verify_friday' le pongo el tipo de dato que va a llevar estrcitamente STRING al $save_day
//luego le digo que por el strtotime como mi $save_day es un string con fecha completa lo que hace ese strtotime es pasarlo a fecha en leguaje de pc
// le paso el date para indicarle que esa fecha completa me lo busque en viernes 'l' = friday y lo guardo en la variable $new_date
//le ingreso el condicional en donde me va a medir si es viernes o no 
//le digo que si sí ese $new_date == "Friday" y me retorme true y el mensajito 
//que si no me retorne false y el mensajito.

function verify_friday (string $save_day){
    $new_date = date('l', strtotime($save_day));
    if($new_date == "Friday"){
        return true . "." . "si tiene un viernes 13";
    } else {
        return false . "NO tiene un viernes 13";;
    }
}