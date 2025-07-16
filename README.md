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
# ESERCIZIO 3 - Costanti
# ################################################################################
Proseguendo con l’esercizio 2,  trasformare le variabili appena create in costanti e richiamarle nella maniera corretta.

Come si definisce una costante?

<?php

const EURO_IN_LIRE = 1936.27;// La costante si scrive senza $ e tutto maiuscolo

echo EURO_IN_LIRE; 

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