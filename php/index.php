<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Inserire un testo e una parola da nascondere</h1>
    <form action="elabora.php" method="post">
        <label for="text" hidden>Textarea:</label><br>
        <textarea name="text" id="text" cols="30" rows="10"></textarea><br>
        <label for="word">Parola da censurare:</label><br>
        <input type="text" id="word" name="word"><br>
        <button type="submit">Vai!</button>
    </form>
</body>
</html>