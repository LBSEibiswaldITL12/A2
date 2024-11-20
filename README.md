# Aufgabe 2

#### Schuljahr: 24/25
#### Lehrgang: 2
#### Übungstag: 20.11.2024
#### Name: Jakob Lipp
#### Klasse: 3a APC
#### Gruppe: B

<br>

## Installation

```bash
git clone https://github.com/LBSEibiswaldITL12/A2.git

docker compose up -d

# Open localhost:80 in web
```

<br>

## Umsetzung

### Standart PHP

```bash
# Open localhost:80/calc.php
```

Im Hintergrund wird eine einfache Multiplikation getätigt und dann am Frontend ausgegeben

Das PHP File [calc.php](/calc.php)

### Form mit standart Request

```bash
# Open localhost:80/calcRequest.php
```

Eingeber einer Menge in Liter und eines Preises pro Liter.
Durch einen Request werden die Daten dann berechnet und ausgegeben.

```html
<!-- Man bekommt die Daten nach dem Submit in einem Request Array heraus -->
<?php 
    var_dumb($_REQUEST);
?>
```

Das PHP File [calcRequest.php](/calcRequest.php)

### Form mit GET Request

```bash
# Open localhost:80/calcGetRequest.php
```

Eingeber einer Menge in Liter und eines Preises pro Liter.
Durch einen GET Request werden die Daten dann berechnet und ausgegeben.
Hier wird auch durch hidden elemente eine Gesammtsumme der Menge und des Preises berechnet.

```html
<!-- Hier muss man bei dem form Element eine method angeben -->
<form method="GET">

<!-- Durch diese Änderung ist das Request array dann das GET -->
<?php 
    var_dumb($_GET);
?>
```

Das PHP File [calcGetRequest.php](/calcGetRequest.php)
