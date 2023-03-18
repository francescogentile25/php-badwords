<?php
$word = $_GET['word'];
$text = $_GET['text'];
$censured_word = str_replace ( $word, "***", $text);
/*  str_replace(porzioneDaModificare, conCosa, stringa) - 
    sostituisce una porzione di una stringa con un nuovo valore*/
//  echo $censured_word;
var_dump($censured_word);
var_dump($word); // simile al consol.log di JS

?>

<p>  <?php echo $text; ?> <?php echo strlen ($text); ?></p>
<h1>
    <?php echo $text. ' la lunghezza è '.strlen($text) ?>
    <!-- posso sia scrivere una stringa o lasciare vuoto così da concatenare solo le due variabili php -->
</h1>
<p>  <?php echo $censured_word; ?></p>
<h1>
    <?php echo $censured_word. ' la lunghezza è ' .strlen($censured_word) ?>
</h1>