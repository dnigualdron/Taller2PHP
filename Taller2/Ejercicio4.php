<!-- Dada una URL con parámetros, crea una función que obtenga sus valores. No se
pueden usar operaciones del lenguaje que realicen esta tarea directamente.
Ejemplo: En la url https://ejemplourl.com?year=2023&challenge=0 los parámetros
serían ["2023", "0"]. -->

<form action="" method="get">
    <label for="url">Digite una URL</label>
    <input type="text" name="url">
    <input type="submit" value="enviar" name="enviar">
</form>

<?php

/* _GET es un súper get que te lleva la información dentro de la URL */
/* _POST es un súper post que te lleva la información por detrás sin verse en la URL */

if (isset($_GET["enviar"])) {
    $urlstring = $_GET["url"];
    $url_end = nameFunction($urlstring);
    print_r($url_end);
} 

  function nameFunction(string $url)
    {
        /*Con explode se le pasa el primer parametro en donde lo va a segmentar en lo que le pongas skdajfkdsj = kasjdksjdkasjd = aksdajsdkas 3 partes y se le pasas el parametro que quieres segmentar así*/
        $urlparametro = explode("?", $url);
        $parametro1 = ($urlparametro[1]);

        $url2cortada = explode("&", $parametro1);

        $resultado = [];

        foreach ($url2cortada as $urlcut) {

            $urlfinish = explode("=", $urlcut);

            $resultado[] = $urlfinish[1];
        }
        return ($resultado);
    }

    //Explicación.
    /*primero para pedir los parametros que nos dice el enunciado lo que hacemos es crear un HTML con los campos a solicitar al usuario: URL*/
    // En este form action se deja vacio que significa que se va a usar acá de igual forma se puede llevar a otro lado poniendole la dirección.
    //Le ingresamos el metodo (METHOD) si es get o post, recordando get trae la info por la url visible y el post por detras del programa.
    //se le pone un label para la URL y el texto que queremos que se muestre en este caso 'Digite una URL';
    //Luego le creamos el boton por medio de un input b y le ponemos el tipo que va a recibir en este caso un texto pq es la URL que van a ingresar, junto con su nombre
    //otro inpun b para crear el boton para que podamos recibir la información.
    //este boton se crea por medio de un tipo 'submit' el valor que va a tener dentro es: 'enviar' (lo que dice el boton) y el nombre de ese boton

//     <form action="" method="get">
//     <label for="url">Digite una URL</label>
//     <input type="text" name="url">
//     <input type="submit" value="enviar" name="enviar">
// </form>

 // abro apertura de php para iniciar. 
// <?php

/* _GET es un súper get que te lleva la información dentro de la URL */
/* _POST es un súper post que te lleva la información por detrás sin verse en la URL */


//acá decimos que cuando le den enviar reciba por medio del metodo get y verifique si existe algo o está null
//line 69 le decimos que la url que traemos se guarde en una variable $urlstring
//luego le decimos que esa variable $urlstring se la pasamos a la funcion nameFunction y guardamos el resultado de la funcion dentro de otra variable
// y luego imprimimos por medio del print_r pq es un arreglo (array) $url_end 
// if (isset($_GET["enviar"])) {
//     $urlstring = $_GET["url"];
//     $url_end = nameFunction($urlstring);
    //ese print_r solo es para cuando se hacen el proceso de arreglos/arrays
    // print_r($url_end);
// } 

    //creamos la funcion le ponemos el nombre que queramos en este caso nameFunction y le pasamos un parametro en este caso 
    //le decimos que va a recibir la variable $url y va a ser un string 

//   function nameFunction(string $url)
//     {
        // usamos explode para poder separa y segmentar en array la url = https://ejemplourl.com?year=2023&challenge=0 que lo separaria asi:
        // "https://ejemplourl.com  [0]        ?year=2023&challenge=0" [1]                    = posicion [0] y posicion [1];
        // $urlparametro = explode("?", $url); // y le decimos que guarde esa variable asi separada. 

        //luego como ya está guardada le decimos a la variable $urlparametro que guarde la ubicacion [1] y practicamente desecha la ubicacion [0] que no necesitamos 
        // $parametro1 = ($urlparametro[1]); //y guarda unicamente la ubicacion [1] dentro de la nueva variable $parametro1

        //con esa variable guardada $parametro1 lo que hacemos es separa ahora el ampersn= &       
        //url que va quedando:       "year=2023 & challenge=0"
        // $url2cortada = explode("&", $parametro1); //y lo guardamos dentro de la nueva variable $url2cortada


        //creamos una variable con una cajita [array] vacia llamada $resultado para guardar los resultados antes de terminar e ingresarlos. 
        // $resultado = [];


        //creamos un foreach para recorrer cada parametro recortado, en este caso nuestra variable anterior del &
        // le decimos que la variable $url2cortada ahora va a ser como $urlcut 
        //es como darle otro nombre a lo mismo con tal de que verifique cosa a cosa, 1 a 1 sin omitir nada.
        // foreach ($url2cortada as $urlcut) {


        //luego le damos el paso casi final con el explode.
        //le pasamos la variable $urlcut y le decimos que ahora lo separe de los =
            // $urlfinish = explode("=", $urlcut); //"year=  2023  challenge=   0"     el year y challenge es nuestra ubicacion [0] y el 2023 y 0 es nuestra ubicacion [1]


            //ahora sí usamos nuestra cajita [array vacia que habiamos creado arriba]
            //le pasamos la ultima variable cortada que es $urlfinish la que acabamos de hacer y le decimos que queremos el campo [1]
            //y lo ingresamos a la cajita de arrays para que asi sea 1 o más valores se guarde sin tener un campo limite. 
            // $resultado[] = $urlfinish[1];
        // }

        //al final fuera del foreach le decimos que nos retorne esa cajita de arrays que ya no está vacia 
        //llamada variable $resultado. 
    //     return ($resultado);
    // }