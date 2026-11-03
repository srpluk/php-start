<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <title>PHP: cyklus píše tabulku</title>
  <style>table { border-collapse: collapse; } td, th { border: 1px solid #999; padding: 2px 10px; }</style>
</head>
<body>
  <h1>Tabulka funkce y = 2x + 1</h1>
  <table>
    <tr><th>x</th><th>y</th></tr>
<?php
for ($x = -5; $x <= 5; $x++) {      // start; podmínka; krok  (jako range(-5, 6) v Pythonu)
    $y = 2 * $x + 1;
    echo "    <tr><td>$x</td><td>$y</td></tr>\n";   // do "" se dosazují proměnné
}
?>
  </table>
  <p>Jedenáct řádků tabulky napsal cyklus. Dej Ctrl+U: uvidíš hotové řádky &lt;tr&gt;, žádný cyklus.</p>
</body>
</html>
