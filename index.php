<!-- esercizio 1 -->

<?php

// $array =[1,2,3,4,5,6,7,8,9,10];

//  $somma = 0;

//  $contatore = 0;

//    for ($i=0; $i<count($array); $i++){
//       if ($array[$i]%2==0){
//         $contatore = $contatore + 1;
//         print_r("$array[$i] \n");

//         $somma = $somma + $array[$i];

//       }
//    }

//    print_r("$somma \n");

//    $media = $somma / $contatore;

//    print_r($media);




// esercizio 2


// $array = [

//     [
//         'nome' => 'Cinzia',

//         'cognome' => 'Loconsole',

//         'genere' => 'donna'
//     ],

//     [
//         'nome' => 'Fabio',

//         'cognome' => 'Massa',

//         'genere' => 'uomo'
//     ],

//     [
//         'nome' => 'Carmine',

//         'cognome' => 'Strollo',

//         'genere' => 'uomo'
//     ],
    
// ];

// foreach ($array as $value) {

//     if($value['genere']== 'donna'){

//         echo "Buongiorno signora ".$value['nome']." ".$value['cognome']. "\n";

//     } else {

//         echo "Buongiorno signor ".$value['nome']." ".$value['cognome']. "\n";

//     }
// }



// esercizio 3

for($i=1; $i<=100; $i++){

    if($i % 15 == 0){

        echo "HACKADEMY67 \n";
   
    } else if ($i % 5 == 0){

        echo "JAVASCRIPT \n";

    } else if ($i % 3 == 0){

        echo "PHP \n";

    } else {

        echo "$i \n";

    }
}













?>
