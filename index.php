
<?php
    $text = 'Dovrebbe essere possibile censurare tutte le parole presenti in questo testo, una alla volta, spero.';
    $censoredParagraph = $text;

    if(isset($_GET['word']) && !empty($_GET['word'])) {

        $censoredWord = $_GET['word'];
        $censoredParagraph = str_ireplace($censoredWord, '***', $text);
    } else {
        echo "<h1>Inserire una parola o una lettera da censurare.</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <h1><?php echo $censoredParagraph; ?></h1>
    <p>Lunghezza del paragrafo censurato: <?php echo strlen($censoredParagraph); ?></p>

    <form action="index.php" method="GET">
        <label for="word">Inserire una parola o una lettera presente nel paragrafo da censurare:</label>
        <input type="text" name="word" id="word">
        <input type="submit" value="Censura">
    </form>

</body>
</html>

