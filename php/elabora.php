<?php
    // variabile che salva il valore del testo con la parola sostituita da ***
    $new_text = str_replace($_POST['word'], '***', $_POST['text']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Testo inserito:</h2>
    <p><?php echo $_POST['text']; ?></p>
    <p>Lunghezza del testo: <?php echo strlen($_POST['text']); ?> </p>

    <h2>Testo con parola nascosta:</h2>
    <p><?php echo $new_text; ?></p>
    <p>Lunghezza del testo: <?php echo strlen($new_text); ?> </p>
</body>
</html>