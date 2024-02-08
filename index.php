<?php
    var_dump ($_GET);
    Var_dump($_GET['paragraph']);
    var_dump($_GET['badword']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <header>
            <h1>
                PHP Badwords
            </h1>
        </header>
        <main>
            <div>
                <h2>
                    Paragrafo inviato:
                </h2>
                <p>
                    <?php echo $_GET['paragraph']; ?>
                </p>
                <h5>
                    Lunghezza del paragrafo: <?php echo strlen($_GET['paragraph']); ?>
                </h5>
            </div>
            <div>
                <h3>
                    Parola da censurare: <?php echo $_GET['badword']; ?>
                </h3>
            </div>
            <hr>
            <div>
                <h2>
                    Paragrafo modificato:
                </h2>
                <p>
                    <?php echo str_replace($_GET['badword'], '***', $_GET['paragraph']); ?>
                </p>
                <h5>
                    Lunghezza del paragrafo: <?php echo strlen( str_replace($_GET['badword'], '***', $_GET['paragraph'])); ?>
                </h5>
            </div>
            <div>
                <h3>
                    Parola da censurare: <?php echo $_GET['badword']; ?>
                </h3>
            </div>
            <hr>
            <form action="?" method="get">
                <div>
                    <div>
                        <label for="">
                            Paragrafo
                        </label>
                    </div>
                    <textarea name="paragraph" id="paragraph"placeholder="Inserisci il paragrafo ..."></textarea>
                </div>
                <div>
                    <div>
                        <label for="badword">
                            Parola da censurare
                        </label>
                    </div>
                    <input type="text" name="badword" id="badword" placeholder="Inserisci parola da censurare...">
                </div>
                <div>
                    <button type="submit">
                        Invia
                    </button>
                </div>
            </form>
        </main>
        
    </body>
</html>