<?php
$conn = mysqli_connect("localhost", "root", "", "wedkowanie");

if (mysqli_connect_errno()) {
    echo "Błąd połączenia: " . mysqli_connect_error();
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <section id="baner">
        <h1>Portal dla wędkarzy</h1>
    </section>
    <section id="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
            $query = "SELECT nazwa, akwen, wojewodztwo FROM ryby INNER JOIN lowisko on ryby.id=lowisko.Ryby_id WHERE rodzaj=3;
            ";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo '<li>' . $row[0] . ' pływa w rzece' . $row[1] . ', ' . $row[2] . '</li>';
            }
            ?>
        </ol>
    </section>
    <section id="prawy">
        <img src="ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <section id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
            $query = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=1;";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr><td>' . $row[0] . '</td>' . '<td>' . $row[1] . '</td>' . '<td>' . $row[2] . '</td></tr>';
            }
            mysqli_close($conn);
            ?>
        </table>
    </section>

    <section id="stopka">
        Stronę wykonał: 00000000000
    </section>
</body>

</html>