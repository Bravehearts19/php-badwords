<?php

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum esse perferendis animi laboriosam distinctio sapiente ipsum totam eius sint, delectus eum possimus! Aliquid sed excepturi illo cupiditate nostrum necessitatibus sint.";
$textLength = strlen($text);
$badWord = $_GET("badWord");
$textToPrint = str_ireplace($badWord, "***", $text)

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Badword</title>
    </head>

    <body>
        <header></header>
        <main>
            <p>
                <?php echo $textToPrint ?> <br>
                <?php echo $textLength ?>
            </p>
        </main>
        <footer></footer>
    </body>
</html>

