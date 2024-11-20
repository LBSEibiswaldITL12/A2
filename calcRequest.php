<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="menge">Menge in Liter:</label><br>
        <input type="text" id="menge" name="menge"><br>
        <label for="price">Preis/Liter:</label><br>
        <input type="text" id="price" name="price"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form> 
    <?php 
        if (isset($_REQUEST["menge"]) && isset($_REQUEST["price"])) {
            echo "<p>Die Benzinkosten betragen für " . $_REQUEST["menge"] . " Liter " . (double)((double)$_REQUEST["menge"] * (double)$_REQUEST["price"]) ." €</p>";
        }
    ?>
</body>
</html>