  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Registratie</h1>
    <form method="POST" action="registratie_handler.php">
        <!-- Username -->
        <input type="text" id="username" name="username">
        <label for="username">
            <b>
                Username
            </b>
        </label>
        <br><br>
        <!-- Email -->
        <input type="email" id="email" name="email">
        <label for="email">
            <b>
                Email
            </b>
        </label>
        <br><br>
        <!-- Age -->
        <input type="age" id="age" name="age">
        <label for="age">
            <b>
                leeftijd
            </b>
        </label>
        <br><br>
        <!-- Submit -->
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>