<?php
$conn = mysqli_connect("localhost","root","","kwiaciarnia");
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
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <section id="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </section>
    <section id="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a></li>
            
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
        </ol>
    </section>
    <section id="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="" method="post">
            Podaj nazwę miasta <input type="text" name="miasto" id="">
            <input type="submit" name="submit" value="SPRAWDŹ">
        </form>
        <?php
        if (isset($_POST['submit'])){
            unset($_POST['submit']);
            $miasto = $_POST['miasto'];
            $query = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto='$miasto';";
            $result = mysqli_query($conn,$query);
            while ($row=mysqli_fetch_array($result)){
                echo "<h3>".$row[0].", ".$row[1]."</h3>";
            }
            mysqli_close($conn);
        }
        ?>
    </section>
    <section id="stopka">
        <p>Stronę opracował: 00000000000
        </p>
    </section>
</body>

</html>