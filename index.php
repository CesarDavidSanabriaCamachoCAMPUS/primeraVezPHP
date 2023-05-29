<?php
// punto 5
/*  
    se crean las carpetas correspondientes
        js          para guardar el java script
        css         para los estilos en css
        img         para guardar las iumagenes del proyecto
        scripts     para guardar todos los archivos del php
        uploads     es el archivo para generar el autoload
    tambiuen vemos "echo" sirve para imprimir cadenas de texto
    en la web puede imprimir mas de una
*/
    echo "Texto a imprimir";

// punto 6
/*
    se crean las carpetas correspondientes
        js          para guardar el java script
        css         para los estilos en css
        img         para guardar las iumagenes del proyecto
        scripts     para guardar todos los archivos del php
        uploads     es el archivo para generar el autoload
    tambiuen vemos "echo" sirve para imprimir cadenas de texto
    en la web puede imprimir mas de una
*/
    $texto = "Mundooooo";
    printf("Hola %s", $texto);

/*
    despues de genera el sprintf que guarda la informacion pero
    no ola improme solo la guarda en una variable
*/
    $texto = "Mundooooo";
    $mensaje = sprintf("Hola %s", $texto);
    echo $mensaje;

// punto 7
/*
    declaramos variables de diferente tipo seguida de = (igual)
    tambien se declaran variables constantes en sintaxis con el "difine"
*/
    // declara variable de string
    $nombre = "Cesar";
    // declara variable de entero
    $edad = 25;
    // declara variable de booleano
    $esValido = true;

    // declara variable de float
    define ("pi", 3.1416);
    // declara variable de nombre
    define ("nombre", "Cesar");
    // declara variable de booleano
    define ("esValido", true);



?>