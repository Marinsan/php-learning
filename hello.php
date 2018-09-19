<?php
<?php
//$greeting="hola mon";
//Xivatos Ctrl + / (teclat numeric)
//echo "Hola mon"; // Hardcoded
//echo $greeting;
//var_dump('hola mon');

//-Xivatos: echo, dd, dump, Laravel dump server, logs, Laravel DebugBar, var_dump, <pre>
// TEST -> TDD

// funcions Predefinides -> venen de serie en php
//var_dump();
//
//nom([Parametres]);

// WHISFUL THINKING | WISHFUL PROGRAMMING

function hello($who="hola mon") {
    //opcional //parametres opcionals

    if ($who=='hola mon'){
        echo $who;
    }else{
        echo 'hola ' . $who;
    }
}
hello('mon');
