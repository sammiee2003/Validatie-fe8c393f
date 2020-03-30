<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
    <input type="email" name="mail"></input>
    <button>verstuur</button>
    <?php 
    if (isset($_GET['mail']) && !empty($_GET['mail'])) {
        if (filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)) {
            echo "dit email addres is geldig";
        } else {
            echo "dit email addres is niet geldig";
        }
    }
   
    ?>
</form>
<body>
</html>