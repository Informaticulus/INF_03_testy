<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Smaki</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <section id="baner">
        <h1>Witamy w restauracji "Wszystkie Smaki"</h1>
    </section>
    <section id="lewy">
        <img src="menu.jpg" alt="Nasze danie">
    </section>
    <section id="prawy">
        <h4>U nas dobrze zjesz!</h4>
        <ol>
            <li>Obiady od 40 zł</li>
            <li>Przekąski od 10 zł</li>
            <li>Kolacje od 20 zł</li>
        </ol>
    </section>
    <section id="dolny">
        <h2>Zarezerwuj stolik on-line</h2>
        <form action="rezerwacje.php" method="post" role="form" target="_blank">
            Data (format rrrr-mm-dd):<br>
            <input type="text" name="date" id=""><br>
            Ile osób?<br>
            <input type="number" name="number" id=""><br>
            Twój numer telefonu:<br>
            <input type="text" name="telephone" id=""><br>
            <input type="checkbox" name="" id="" value="">Zgadzam się na przetwarzanie moich danych osobowych<br>
            <input type="reset" value="WYCZYŚĆ"> <input type="submit" name="submit" value="REZERWUJ">
        </form>
    </section>
    <section id="stopka">
        Stronę internetową opracował: <span style="font-style:italic;">00000000000</span>
    </section>
</body>


</html>