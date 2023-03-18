<form action="form.php" method="GET">
<!-- action inserisco il nome del file al quale devo richiedere o mandare i dati tramite GET o POST  -->
<textarea name="text"  cols="30" rows="10" placeholder="inserisci il testo"></textarea>
    <input type="text" name="word" placeholder="inserisci parola da censurare"> 
    <!-- name serve per mappare i dati che si mandano al server e li recuero poi nel 2 file -->
    <button type="submit">Invia</button>
</form>