<?php
$word = $_GET['word'];
$censured_word = str_replace ( $word, "***", $word);
// echo $censured_word;
?>
<h1> Ciao <?php echo $word ?></h1>
<h1> Ciao <?php echo $censured_word ?></h1>