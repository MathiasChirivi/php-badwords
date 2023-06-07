<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
<form action="stampaForm.php" method="POST">
        <div class="d-flex flex-column my-4 mx-3">
            <label class="my-2 w-25 text-center" for="">Inserisci un paragrafo</label>
            <input autocomplete="off" type="text" placeholder="Inserisci la tua stringa" name="Paragrafo" class="w-25">
        </div>
        <hr class="mx-3 my-3 w-50">
        <div class="d-flex flex-column my-3 mx-3">
            <label class="my-2 w-25 text-center" for="">Inserisci la parola da censurare</label>
            <input autocomplete="off" type="text" placeholder="Inserisci la parola da censurare" name="parolaCensurata" class="w-25">
        </div>
        <button class="marginButton mt-3" type="submit">Invia</button>
    </form>
</body>
</html>