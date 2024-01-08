<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inserire un testo e una parola da nascondere</h1>
    <form action="elabora.php" method="post">
        <label for="text">Textarea:</label><br>
        <textarea name="text" id="text" cols="30" rows="10"></textarea><br>
        <label for="word">Badword:</label><br>
        <input type="text" id="word" name="word">
        <button type="submit">Vai!</button>
    </form>
</body>
</html>