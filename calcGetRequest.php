<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="menge">Menge in Liter:</label><br>
        <input type="text" id="menge" name="menge"><br>
        <label for="price">Preis/Liter:</label><br>
        <input type="text" id="price" name="price"><br><br>
        <input type="hidden" id="sumMenge" name="sumMenge" value="<?php 
            if (isset($_GET["sumMenge"])) {
                $sumMenge = (double)$_GET["sumMenge"] += $_GET["menge"];
                echo $sumMenge;
            } else {
                echo 0;
            }
        ?>">
        <input type="hidden" id="sumPrice" name="sumPrice" value="<?php 
            if (isset($_GET["sumPrice"])) {
                $sumPrice = (double)$_GET["sumPrice"] += ($_GET["price"] * $_GET["menge"]);
                echo $sumPrice;
            } else {
                echo 0;
            }
        ?>">
        <input type="submit" name="submit" value="Submit">
    </form> 
    <?php 
        if (isset($_GET["menge"]) && isset($_GET["price"])) 
            echo "<p>Die Benzinkosten betragen für " . $_GET["menge"] . " Liter " . (double)((double)$_GET["menge"] * (double)$_GET["price"]) ." €</p>";
        if (isset($_GET["sumMenge"])) 
            echo "<p>Gesamtmenge: " . $sumMenge . "</p>";
        if (isset($_GET["sumPrice"])) 
            echo "<p>Gesamtbetrag: " . $sumPrice . "</p>";
    ?>
</body>
</html>