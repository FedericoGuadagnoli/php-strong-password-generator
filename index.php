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






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP Strong Password Generator</title>
</head>
<body class="bg-dark">
    <header>
        <div class="container text-center mt-5">
            <h1 class="text-primary">Strong Password Generator</h1>
            <h2 class="text-light">Genera una password sicura</h3>
        </div>
    </header>
    <main>
        <section id="password" class="mt-5">
        <div class="container">
            <p class="py-5 ps-2 text-light bg-info rounded h3"><?php echo $password; ?></p>
            <form action="#" method="post" class=" bg-danger">
                <div class="d-flex justify-content-between p-3 mb-5">
                    <label for="length" class="text-light h3">Lunghezza password</label>
                    <input type="text" name="length" id="length" class="h3">
                </div>
                <div class="p-3">
                    <button name="send" class="btn btn-primary fs-4">Invia</button>
                    <button name="cancel" class="btn btn-secondary fs-4">Annulla</button>
                </div>
            </form>
        </div>

        </section>
    </main>
</body>
</html>