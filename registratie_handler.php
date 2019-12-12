<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form registratie</h1>
    <?php
    $request = $_REQUEST;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($request as $field => $value) {
            echo('<p>' . 'Jouw ' . $field . ' is ' . $value . '</p>');
        }
    } else {
        echo('<h1>Ongeldig</h1>');
    }
    ?>
</body>
</html>