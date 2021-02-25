<?php
    $name = $_GET['nome'];
    $mail = $_GET['mail'];
    $age = $_GET['eta'];
    $message = '';

    if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
        $message = 'Accesso riuscito!';
    } else {
        $message = 'Accesso negato!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>PhP Snack 2</title>
</head>
<body>

    <!-- MAIN -->
    <main>
        <h1><?php echo $message; ?></h1>
    </main>

</body>
</html>