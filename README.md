# Aufgabe 2

#### Schuljahr: 24/25
#### Lehrgang: 2
#### Übungstag: 20.11.2024
#### Name: Jakob Lipp
#### Klasse: 3a APC
#### Gruppe: B

<br>

## Installation

Öffne CMD oder Terminal

```bash
git clone https://github.com/LBSEibiswaldITL12/A2.git

# oder über ssh

git clone git@github.com:LBSEibiswaldITL12/A2.git


cd A2
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

<br>

## Fragen

### Welche Informationen liefert die Funktion phpinfo();?

Die Funktion phpinfo(); liefert eine umfassende Übersicht über die aktuelle PHP-Konfiguration und -Umgebung. Dazu gehören:

- **PHP-Version:** Die installierte PHP-Version.
- **Serverinformationen:** Angaben zum Webserver und dessen API (z. B. Apache, Nginx, etc.).
- **Installierte Module/Erweiterungen:** Eine Liste aller geladenen PHP-Module (z. B. mysqli, cURL).
- **Einstellungen aus der PHP.INI:** Alle aktiven Konfigurationsoptionen und ihre aktuellen Werte.
- **Umgebungsvariablen:** Server- und Umgebungsvariablen wie $_SERVER.
- **Pfadkonfigurationen:** Standardverzeichnisse wie include_path und upload_tmp_dir.
- **Lizenzen:** Informationen zur PHP-Lizenz.

phpinfo(); wird häufig für Debugging und zur Prüfung der Konfiguration verwendet.

### Wozu dienen folgende Optionen in der PHP.INI?

- ***allow_url_fopen = off***
  - Funktion: Bestimmt, ob PHP Funktionen wie file_get_contents(), fopen(), oder include() erlaubt, auf entfernte URLs (z. B. http:// oder ftp://) zuzugreifen.
- ***safe-mode = on***
  - Funktion: Safe Mode ist eine veraltete Funktion (seit PHP 5.4 entfernt), die ursprünglich entwickelt wurde, um die Sicherheit auf Shared-Hosting-Umgebungen zu verbessern.
- ***session.auto_start = off***
  - Funktion: Bestimmt, ob PHP automatisch eine Sitzung (session_start()) beim Skriptstart initialisiert.
