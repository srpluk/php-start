<?php
// Všechno od značky <?php až po koncovou značku je program. Běží na serveru, ne v prohlížeči.
// (Pozor: koncovou značku nepiš ani do komentáře, PHP by tam blok ukončilo.)
date_default_timezone_set("Europe/Prague");
$ted = date("H:i:s");      // proměnná: dolar + jméno; date() vrátí text
$den = date("j. n. Y");
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <title>PHP: čas serveru</title>
</head>
<body>
  <h1>Na serveru je právě <?php echo $ted; ?></h1>
  <p>Dnes je <?php echo $den; ?>. Stiskni F5: čas se změní, protože server stránku vyrobil znovu.</p>
  <p>Statická stránka tohle neumí: v souboru je napsané jedno datum napořád.</p>
</body>
</html>
