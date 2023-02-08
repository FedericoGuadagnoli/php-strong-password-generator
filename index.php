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
            <p class="py-5 ps-2 text-light bg-info rounded h3">Nessun parametro valido inserito</p>
            <form action="#" method="post" class=" bg-danger">
                <div class="d-flex justify-content-between p-3 mb-5">
                    <label for="length" class="text-light">Lunghezza password</label>
                    <input type="text" name="length" id="length">
                </div>
                <div class="p-3">
                    <button name="send" class="btn btn-primary">Invia</button>
                    <button name="cancel" class="btn btn-secondary">Annulla</button>
                </div>
            </form>
        </div>

        </section>
    </main>
</body>
</html>