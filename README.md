# PHP start – server u GitHubu, ovládaný z prohlížeče

Když ti PHP na školním počítači neběží (chybí knihovna, nejde stáhnout zip,
nemáš práva), pusť si ho tady. Server poběží na počítači u GitHubu
(**GitHub Codespaces**), ty ho ovládáš z prohlížeče ve VS Code, které už znáš.
Je to zadarmo: každý účet na GitHubu má 120 hodin měsíčně na 1 jádro,
tedy 60 hodin na 2jádrovém stroji, bez platební karty.

## 1. Otevři si pracovní prostředí

**Nejrychlejší (v hodině):** přihlášený na GitHubu (stejný účet jako v AS) klikni na

https://codespaces.new/jindrichpaterassemi/php-start?quickstart=1

a dej **Create codespace** (případně **Create new codespace**). Asi minutu se
stroj chystá, pak se otevře VS Code v prohlížeči se souborem `index.php`.

**Když chceš kód ve vlastním repozitáři (domácí úkol):** nahoře zelené
tlačítko **Use this template → Create a new repository**, název třeba
`web-php`, **Create repository**. Ve svém novém repozitáři pak
**Code → Codespaces → Create codespace on main**.

## 2. Pusť server

V menu **Terminal → New Terminal** (dole se otevře příkazový řádek) napiš:

    php -S localhost:8000

Vypíše `Development Server (http://localhost:8000) started`. Vpravo dole
vyskočí **„Your application running on port 8000 is available“ → Open in
Browser**. Když okno zmizí dřív, než ho stihneš: záložka **PORTS** vedle
terminálu, řádek 8000, ikona zeměkoule (Open in Browser).

Adresa vypadá jako `https://neco-8000.app.github.dev/`. To je tvůj server:
`localhost` z terminálu je počítač u GitHubu, port 8000 je v názvu.
Otevře se `index.php`; ukázky z výkladu jsou v `demo/`:

- `/demo/demo1_hello.php` – nadpis napsal program
- `/demo/demo2_cas.php` – proměnné a čas serveru
- `/demo/demo3_smycka.php` – cyklus píše tabulku
- `/demo/demo4_pozdrav.php?jmeno=Eva` – data z adresy, `$_GET`

## 3. Uprav, ulož, F5

VS Code vlevo, stránka v druhé záložce nebo okně. Po každé změně **Ctrl+S**
a v prohlížeči **F5**. Server zastavíš v terminálu **Ctrl+C**; znovu ho
pustíš šipkou nahoru a Enter. Dál pokračuj podle listu PRG-09 od části 3,
jen místo `.\php\php.exe` píšeš `php`.

## 4. Aby ti práce nezmizela

Codespace se po 30 minutách nečinnosti zastaví (soubory zůstanou, znovu ho
otevřeš na https://github.com/codespaces). Po 30 dnech bez otevření se
**smaže i s tvými soubory**, pokud nejsou v repozitáři:

- máš vlastní repozitář (Use this template): vlevo ikona **Source Control**,
  u změn **+**, napiš zprávu, **Commit**, pak **Sync Changes**;
- otevřel jsi jen odkaz: **Source Control → Commit → Publish Branch**,
  zadej název, **Publish to GitHub public repository**. Vznikne ti repozitář
  s tvým kódem.

## Když to nejde

- Stránka chce přihlášení: přihlas se na GitHub, bez účtu to nejde.
- *You have exhausted your included usage*: vyčerpaných 60 hodin, počkej na
  další měsíc (nebo pracuj na vlastním PC podle listu PRG-09, část 2).
- Terminál: *Address already in use*: server už běží v jiném terminálu
  (záložky vpravo dole), nebo použij port 8001 (v příkazu i v PORTS).
- *404 Not Found*: překlep v názvu souboru nebo složky (`demo/...`).
- Prohlížeč: stránka nejde načíst: server neběží (Ctrl+C nebo zavřený
  terminál). Pusť ho znovu.
- Stroj se nespustí nebo se točí déle než 3 minuty: zavři záložku, na
  https://github.com/codespaces codespace smaž (…) a vytvoř nový.

## Co je v repozitáři

| Soubor / složka | Co to je |
|---|---|
| `index.php` | tvoje první stránka (list PRG-09, část 3) |
| `demo/` | pět ukázek z výkladu PRG-09, stejné jako v repozitáři `prg-demo` |
| `.devcontainer/` | nastavení pro Codespaces (port 8000, otevřené soubory); nesahej |
