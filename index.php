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

// punto 8
/*
    existen tipos de datos pára almacenar tipos de informacion en php
        (int)       almacena nuemeros enteros sin decimales
        (float)     almacena numeros con decimales}
        (string)    almacena texto o caracteres (string)
        (bool)      almacena valores true o false (verdadero o falso)
        (array)     almacena colecciones de datos que puedes ser diferentes
        (object)    almacena instancias de clases,que son definiciones de objetos
        (resourse)  almacena recursos de bases de datos o archivos abiertos (recursos externos)
        (null)      representa variables sin valor o sin definir (no contiene nada o no se ha declarado)
*/
    // boolean
    $boolean=true;
    var_dump($boolean);
    // enteros
    $numero=13;
    var_dump($numero);
    // float
    $float=13.5;
    var_dump($float);
    //string
    $string="Cesar";
    var_dump($string);
    // array
    $array=["Cesar", 13, 13.5, true];
    var_dump($array);
    
// punto 9
/*
    los siguientes son los operadores que se usan en php:
            aritmeticos             asignacion                array                           bitwise

    (+)     suma              (=)     igual que         (+)     union               (&)     y (and)
    (-)     resta                                       (==)    igualdad            (^)     verdadero solo uno
    (*)     multiplicacion                              (===)   identico            (|)     no
    (/)     division                                    (!=)    desigual            (<<)    shift izq
    (%)     modulo                                      (<>)    desigual            (>>)    shift der
    (*)     potencia                                    (!==)   no es indentico 
     
            comparacion                                         ejecucion                      incremento/reduccion

    (==)        igualdad                           (``)    para poder dar espacio           (++$a)      pre-incremento
    (===)       identico                                                                    ($a++)      post-incremento
    (!==)       no identico                                     control de error            (--$a)      pre-reduccion
    (<>)        desigual                                                                    ($a--)      post-reduccion
    (<)         menor que                          (@)     ignora los mensajes de error
    (<=)        menor o igual que
    (>)         mayor que                           
    (>=)        mayor o igual que
    (<=>)       adicion izq num (-) der num (+)

*/
?>