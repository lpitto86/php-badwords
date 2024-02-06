<?php
    $paragraph = $_POST['paragraph'];
    $badword = $_POST['badword'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <div>
        <p>
            <?php
                echo $paragraph;
                echo '</br>';
                echo strlen($paragraph);
                echo '</br>';
                echo str_replace($badword, '***', $paragraph);
                echo '</br>';
                echo strlen(str_replace($badword, '***', $paragraph));
            ?>
        </p>
        <a href="./index.php">Torna alla Home</a>
    </div>
</body>
</html>