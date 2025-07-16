<?php

echo '--------------------------------------------<br />';
echo 'ESERCIZIO 2 - Variabili e Costanti';
// Esercizio 2
$int = 1;
$float = 3.14;
$string = 'sono una stringa';
$boolean = true;

var_dump(
    $int,
    $float,
    $string,
    $boolean
);

echo '<br />';
echo '--------------------------------------------<br />';
echo 'ESERCIZIO 3 - Costanti';
// Esercizio 3
const PI_GRECO = 3.141592;
echo PI_GRECO;

echo '<br />';
echo '--------------------------------------------<br />';
echo 'ESERCIZIO 4 - Concatenare le stringhe<br />';

// $1text = "Marco"; nome variabile non valido inizia con un umero
$text1 = "Marco";
$text2 = "hai"; 
// $text.3 = "sete"; nome variabile non valido presenta un .
$text3 = "sete";

$text4 = "?";
// @text5 = "Perchè"; nome variabile non valido inizia con @
$text5 = "Perchè";
// $te-xt6 = '$text2'; nome variabile non valido presenta un -
// $text 7 = 'bevuto'; nome variabile non valido c'è uno spazio
$text7 = 'bevuto';
// $text8 = "tutto" // manca il ; firnale
$text8 = "tutto";

echo $text1 . ' ' . $text2 . ' ' . $text3 . $text4
. ' ' . $text5 . ' ' . $text2 . ' ' . $text7 . ' ' . $text8;

echo '<br />';
echo '--------------------------------------------<br />';
echo 'ESERCIZIO 5 - Dati i seguenti ARRAY:';

$words1 = [
  'una',
  67,
  'vita',
  'colle',
  'mi',
  'rosso',
  [
    'oscura',
    'era',
    89,        
    [
      'mezzo',
      [
        'cammin',
        'Nel',
        [
          'selva',
          'la',
          [
            'via',
            'una',
            true,
          ]
        ],
      ]
    ],
    'ritrovai',
    'per'
  ],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra', 
   'elemento3' => [
      'Virgilio',
      'smarrita',
      'ché'
    ]
];

var_dump(
    $words1,
    $words2
);
echo '<br /><br />';

echo 'Frase da ricomporre<br />';
echo 'Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita.';
echo '<br /><br />';
$results = ""; //<--- Tutto in questa variabile
$results .= $words1[6][3][1][1]
    . ' ' . $words1[6][3][0]
    . ' ' . $words1[6][3][0]
    . ' ??? '
    . $words1[6][3][1][0]
    . ' ??? '
    . $words2['elemento2']
    . ' ' . $words1[2]
    . ' ??? '
    . ' ' . $words1[6][4]
    . ' ' . $words1[6][5]
    . ' ' . $words1[0]
    . ' ' . $words1[6][3][1][2][0]
    . ' ' . $words1[6][0]
    . ', '
    . ' ' . $words2['elemento3'][2]
    . ' ' . $words1[7]
    . ' ' . $words1[6][3][1][2][2][0]
    . ' ' . $words1[6][1]
    . ' ' . $words2['elemento3'][1]
    . '. '


;

echo $results;


echo '<br />';
echo '--------------------------------------------<br />';
echo 'ESERCIZIO 6 - Condizioni booleane SUDOKU';
//Dicharazione Varabili
$a = false;
$b = true;
$c = true;
$d = false;

echo '<br />';
echo '<pre>';
echo 'Utilizzando la logica di un Sudoku, completare lo schema qui sotto riportato cosi da ottenere i valori stampati dai var_dump() a fondo pagina.';
echo '<br />';
echo 'Ogni blocco dovrà tassativamente avere';
echo '<br />';
echo '3 AND (&&)';
echo '<br />';
echo '3 OR ( || )';
echo '<br />';
echo '3 TRUE';
echo '<br />';
echo '3 FALSE';
echo '<br />';
echo 'Non ci sono limitazioni sull’operatore di negazione ( ! )';


//Primo Blocco Esempio Completo
$ab = !$a && $b; //true
$ad = $a || $d; // false
$bc = $b && $c; //True
$bd = !$b || $d; //False
$cb = $c && $b; //True
$ca = !$c || $a; //false

var_dump(
    $ab,
    $ad,
    $bc,
    $bd,
    $cb,
    $ca
);

//Secondo Blocco Da completare
$cabc = $ca && $bc;
$cbbc = $cb && $bc;
$bdab = $bd && $ab; 
$bccb = $bc && !$cb;
$bcab = !$bc || !$ab;
$bcca = $bc && $ca;

echo '<br />';
echo 'Secondo blocco';
var_dump(
    $cabc,
    $cbbc,
    $bdab,
    $bccb,
    $bcab,
    $bcca
);

//Terzo Blocco Da completare
$cbbccabc = $cbbc || $cabc;
$bccbbdab = $bccb && $bdab;
$cabcbcca = $cabc && $bcca;
$bdabbccb = $bdab && $bccb;
$cbbcbccb = $cbbc && $bccb;
$cabcbccb = $cabc && $bccb;

echo '<br />';
echo 'Terzo blocco';
var_dump(
    $cbbccabc,
    $bccbbdab,
    $cabcbcca,
    $bdabbccb,
    $cbbcbccb,
    $cabcbccb
);

echo '<br />';
echo 'Output Esempio Completo' . '<br />';
echo 'var_dump($cbbccabc); //True' . '<br />';
echo 'var_dump($bccbbdab); //True' . '<br />';
echo 'var_dump($cabcbcca); //False' . '<br />';
echo 'var_dump($bdabbccb); //False' . '<br />';
echo 'var_dump($cbbcbccb); //False' . '<br />';
echo 'var_dump($cabcbccb); //True' . '<br />';