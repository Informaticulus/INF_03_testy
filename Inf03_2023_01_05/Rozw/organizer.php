<?php
$conn = mysqli_connect("localhost", "root", "", "kalendarz");

if (mysqli_connect_errno()) {
    echo "Błąd połaczenia z bazą mysql " . mysqli_connect_error();
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>
    <section id="baner1">
        <H1>Organizer: SIERPIEŃ</H1>
    </section>
    <section id="baner2">
        <form action="" method="post">
            Zapisz wydarzenie: <input type="text" name="wydarzenie" id="">
            <input type="submit" name="submit" value="OK">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $wydarzenie = $_POST['wydarzenie'];
            $query = "UPDATE zadania SET wpis = '$wydarzenie' WHERE day(dataZadania)=9 and miesiac='sierpien' and rok='2020'";
            mysqli_query($conn, $query);
        }
        ?>
    </section>
    <section id="baner3">
        <img src="logo2.png" alt="sierpień">
    </section>
    <section id="glowna">
        <?php
        $query = "SELECT dataZadania, wpis FROM zadania WHERE miesiac='sierpien';";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="kalendarz"><h5>' . $row[0] ."</h5><p>". $row[1] . "</p></div>";
        }
        mysqli_close($conn);
        ?>
    </section>
    <section id="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </section>
</body>

</html>