<?php 

// Creo una funzione per generare una password randomica fra i caratteri disponibili con lunghezza presa dall'input
function generatePassword($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";

    // Mescolo casualmente  i caratteri disponibili, creo la funzione substr che mi restituisce una sottostringa con la lunghezza specificata dal terzo parametro.
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}

// Recupero la lunghezza della password dall'input
$length = $_POST['length'] ?? '';

// Genero la password richiamando la funzione e inserendo come parametro la variabile con il valore recuperato dall'input e verifico che sia un numero con la funzione is_numeric.
// Se è vero...
if (is_numeric($length) && $length <= 20) {
    $password = generatePassword($length);
} 

// Se clicco il botton annulla...
else if (isset($_POST['cancel']) || !is_numeric($length)) {
    $password = 'Nessun paramentro valido inserito';
}

// Se è più di 20 caratteri
else if ($length > 20){
    $password = 'Puoi scegliere fino a un massimo di 20 caratteri';
}
else {
    $password = 'Nessun paramentro valido inserito';
}
?>