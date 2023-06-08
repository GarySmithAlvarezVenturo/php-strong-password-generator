<!DOCTYPE html>
<html>
<head>
    <title>Generatore di password</title>
    <style>
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Generatore di password</h1>

    <form action="index.php" method="GET">
        <label for="length">Lunghezza password:</label>
        <input type="number" name="length" id="length" min="1" max="50" required>
        <input type="submit" value="Genera password">
    </form>

    <?php
    // Include il file con le funzioni
    include 'functions.php';

    // Controlla se è stato inviato il parametro "length" nel GET
    if (isset($_GET['length'])) {
        // Ottiene la lunghezza della password dal GET
        $length = $_GET['length'];

        // Genera la password casuale
        $password = generatePassword($length);

        // Stampa la password
        echo '<p>La tua password generata è: ' . $password . '</p>';
    }
    ?>
</body>
</html>
