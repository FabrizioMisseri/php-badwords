<?php
$word = $_GET['username'];
$article = $_GET['article'];
$censor = "***";

// str_replace(porzioneDaModificare, conCosa, stringa);
$new_article = str_replace($word, $censor, $article);

// strlen(stringa) - ritorna la lunghezza di una stringa
$article_length = strlen($article);
$new_article_length = strlen($new_article);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>paragrafo</h1>
        <p>
            <?php echo $article ?>
        </p>
        <h4>
            <?php echo "la lunghezza del paragrafo è $article_length" ?> 
        </h4>
    </div>

    <div>
        <h3>
            <?php echo "La parola censurata è $word" ?> 
        </h3>
        <h1>paragrafo censurato</h1>
        <p>
            <?php echo $new_article ?>
        </p>
        <h4>
            <?php echo "la lunghezza del paragrafo è $new_article_length" ?> 
        </h4>
    </div>
</body>
</html>