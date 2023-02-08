<?php
include './includes/data/functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<?php
include './includes/templates/head.php';
?>
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