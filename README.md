# PHP - primi rudimenti

# ################################################################################
# ESERCIZIO 2 - Variabili e Costanti
# ################################################################################
In una nuova pagina definire 4 variabili di tipo:

Intero
Float
String
Boolean
Verificare mediante un var_dump() il tipo correttamente assegnato.

# ################################################################################
# ESERCIZIO 2 - soluzione
# ################################################################################
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


# ################################################################################
# ESERCIZIO 3 - Costanti
# ################################################################################
Proseguendo con l’esercizio 2,  trasformare le variabili appena create in costanti e richiamarle nella maniera corretta.

Come si definisce una costante?

<?php

const EURO_IN_LIRE = 1936.27;// La costante si scrive senza $ e tutto maiuscolo

echo EURO_IN_LIRE; 

# ################################################################################
# ESERCIZIO 3 - soluzione
# ################################################################################
// Esercizio 3
const PI_GRECO = 3.141592;
echo PI_GRECO;


# ################################################################################
# ESERCIZIO 4 - Concatenare le stringhe
# ################################################################################
Correggere eventuali errori di dichiarazione e stampare in un echo la stringa:

Marco hai sete? Perchè hai bevuto tutto

$1text = "Marco"; 
$text2 = "hai"; 
$text.3 = "sete"; 
$text4 = "?";
@text5 = "Perchè";
$te-xt6 = '$text2';
$text 7 = 'bevuto';
$text8 = "tutto"

# ################################################################################
# ESERCIZIO 4 - soluzione
# ################################################################################
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


# ################################################################################
# ESERCIZIO 5 - Dati i seguenti ARRAY:
# ################################################################################
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

$results =  ""; //<--- Tutto in questa variabile
echo $results;

Creare una variabile di tipo Stringa chiamata $results che stampi sul terminale il testo (rispettando spazi e punteggiature) di questi due array.

Ricordando l’accesso agli array con indici e chiavi visti a lezione, ricostruire questa frase:

Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita.

ATTENZIONE: Nell’array potreste trovare degli intrusi o non trovare alcune preposizioni. Approcciate il problema nel modo che ritenute più opportuno: nuove variabili, concatenamenti, apice singolo, doppio apice ecc..

# ################################################################################
# ESERCIZIO 5 - soluzione
# ################################################################################

Facciamo un var_dump dei due arrays e otteniamo questo
var_dump( words1, words2);
array(8) { 
	[0]=> string(3) "una" 
	[1]=> int(67) 
	[2]=> string(4) "vita" 
	[3]=> string(5) "colle" 
	[4]=> string(2) "mi" 
	[5]=> string(5) "rosso" 
	[6]=> array(6) { 
		[0]=> string(6) "oscura" 
		[1]=> string(3) "era" 
		[2]=> int(89) 
		[3]=> array(2) { 
			[0]=> string(5) "mezzo" 
			[1]=> array(3) { 
				[0]=> string(6) "cammin" 
				[1]=> string(3) "Nel" 
				[2]=> array(3) { 
					[0]=> string(5) "selva" 
					[1]=> string(2) "la" 
					[2]=> array(3) { 
						[0]=> string(3) "via" 
						[1]=> string(3) "una" 
						[2]=> bool(true) 
					} 
				} 
			} 
		} 
		[4]=> string(8) "ritrovai"
		[5]=> string(3) "per" 
	} 
	[7]=> string(7) "diritta" 
} 

array(3) { 
	["elemento1"]=> float(25.89) 
	["elemento2"]=> string(6) "nostra" 
	["elemento3"]=> array(3) { 
		[0]=> string(8) "Virgilio" 
		[1]=> string(8) "smarrita" 
		[2]=> string(4) "ché" 
	} 
}




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




# ################################################################################
# ESERCIZIO 6 - Condizioni booleane SUDOKU
# ################################################################################
Date le seguenti variabili:

//Dicharazione Varabili
$a = false;
$b = true;
$c = true;
$d = false;
Utilizzando la logica di un Sudoku, completare lo schema qui sotto riportato cosi da ottenere i valori stampati dai var_dump() a fondo pagina.

Ogni blocco dovrà tassativamente avere:

3 AND (&&)
3 OR ( || );
3 TRUE
3 FALSE
Non ci sono limitazioni sull’operatore di negazione ( ! )
<?php
//Primo Blocco Esempio Completo
$ab = !$a && $b; //true
$ad = $a || $d; // false
$bc = $b && $c; //True
$bd = !$b || $d; //False
$cb = $c && $b; //True
$ca = !$c || $a; //false

//Secondo Blocco Da completare
$cabc = 
$cbbc = 
$bdab = 
$bccb = $bc && !$cb;
$bcab = !$bc || !$ab;
$bcca = 

//Terzo Blocco Da completare
$cbbccabc = $cbbc || $cabc;
$bccbbdab = 
$cabcbcca = $cabc && $bcca;
$bdabbccb = $bdab && $bccb;
$cbbcbccb = 
$cabcbccb = 

//Output Esempio Completo
var_dump($cbbccabc); //True
var_dump($bccbbdab); //True
var_dump($cabcbcca); //False
var_dump($bdabbccb); //False
var_dump($cbbcbccb); //False
var_dump($cabcbccb); //True

# ################################################################################
# SOLUZIONE
# ################################################################################
#//Secondo Blocco Da completare
$cabc = $ca && $bc;
$cbbc = $cb && $bc;
$bdab = $bd && $ab; 
$bccb = $bc || !$cb;
$bcab = !$bc || !$ab;
$bcca = $bc || $ca;

echo '<br />';
echo 'Secondo blocco<br />';
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
$bccbbdab = $bccb || $bdab;
$cabcbcca = $cabc && $bcca;
$bdabbccb = $bdab && $bccb;
$cbbcbccb = $cbbc && !$bccb;
$cabcbccb = $cabc || $bccb;

echo '<br />';
echo 'Terzo blocco<br />';
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
