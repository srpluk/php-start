<?php
// Adresa pozdrav.php?jmeno=Eva → do $_GET["jmeno"] dorazí "Eva".
// ?? znamená: když parametr chybí, použij text vpravo.
$jmeno = $_GET["jmeno"] ?? "neznámý návštěvníku";
// htmlspecialchars: znaky < > " & převede na neškodný text.
// Zkus bez něj: ?jmeno=<b>Eva</b>  (a v dubnu si řekneme, proč je to nebezpečné)
$jmeno = htmlspecialchars($jmeno);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <title>PHP: pozdrav z adresy</title>
</head>
<body>
  <h1>Ahoj, <?php echo $jmeno; ?>!</h1>
  <p>Změň adresu: <code>demo4_pozdrav.php?jmeno=TvojeJmeno</code>. Text z adresy šel na server a vrátil se v HTML.</p>
  <form method="get">
    <label>Jméno: <input name="jmeno"></label>
    <button>Pozdravit</button>
  </form>
  <p>Formulář s method="get" dělá totéž: po odeslání se jméno objeví v adrese za otazníkem.</p>
</body>
</html>
