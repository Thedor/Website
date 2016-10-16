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

include "system/resources/funct.php"; //Laden von Funktionen (später besonders wichtig bei User- und Adminbereich)
include "system/resources/var.php";   //Laden von Variablen (dort sind auch die mit $_GET übergebenen Parameter in einem Array definiert
include "system/resources/const.php"; //Laden von Konstanten (beispielsweise Fehlerkonstanten)
//include "system/resources/class.php"; //kein Inhalt

//Einloggen in Datenbank (bei mir jetzt Passwort und Username im Plain-Phpcode der extern sowieso nicht gelesen werden kann)
                      //Host      User        Passwort      Datenbank
$mysql = @new MySQLi('localhost','user','FPn5rQm2mAWt6wVc','database'); //$msql wird jetzt immer benutzt um mit Datenbank zu interagieren


?>
