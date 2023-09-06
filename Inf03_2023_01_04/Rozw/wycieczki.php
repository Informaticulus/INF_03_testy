<?php
$con = mysqli_connect("localhost", "root", "", "biuro");
if (mysqli_connect_errno()) {
    echo "Błąd połaczenia." . mysqli_connect_error();
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <section id="gora">
        <h1>BIURO TURYSTYCZNE</h1>
    </section>
    <section id="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <?php
            $query = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna <>0;";
            if ($result = mysqli_query($con, $query)) {
                while ($row = mysqli_fetch_row($result)) {
                    echo "<li>" . $row[0] . " dnia " . $row[1] . " jedziemy do " . $row[2] . ", cena: " . $row[3] . "</li>";
                }
            }
            ?>
        </ul>
    </section>
    <section id="lewy">
        <h2>Bestselery</h2>
        <table>
            <tr>
                <td>Wenecja</td>
                <td>Kwiecień</td>
            </tr>
            <tr>
                <td>Londyn</td>
                <td>Lipiec</td>
            </tr>
            <tr>
                <td>Rzym</td>
                <td>Wrzesień</td>
            </tr>
        </table>
    </section>
    <section id="srodkowy">
        <h2>Nasze zdjęcia</h2>
        <?php
        $query = "SELECT nazwaPliku, podpis FROM zdjecia ORDER by podpis DESC;";
        if ($result = mysqli_query($con, $query)) {
            while ($row = mysqli_fetch_row($result)) {
                echo "<img src=../Zad4/".$row[0]." alt=\"".$row[1]."\"".">";
            }
        }
        ?>
    </section>
    <section id="prawy">
        <h2>Skontaktuj się</h2>
        <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
        <p>telefon: 111222333</p>
    </section>
    <section id="dol">
        <p>Stronę wykonał: 00000000000</p>
    </section>
</body>

</html>