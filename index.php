<?php
/*
  index.php ist der Main-Part:
    - läd Funktionen, Variablen, Konstanten & geg. Klassen
    - vorerst: stellt Verbindung mit Datenbank her
    - verarbeitet Teile der in Url weitergegebenen Parameter (über $_GET) -> welches Template wird geladen -> Unterseiten
    - läd Standard-Templates: Head (metas, links, title, etc), Body (Navigation, Header, Section, Footer)
    - läd spezifisches Template je nachdem was über $_GET übergeben wurde
*/

//Php-Errors erzeugen & anzeigen
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
