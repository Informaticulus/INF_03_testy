<?php
$conn = mysqli_connect("localhost", "root", "", "baza");
if (mysqli_connect_errno()) {
    echo "Błąd połączenia: " . mysqli_connect_error();
    exit();
}
 if (isset($_POST['submit'])) {
    unset($_POST['submit']);
    echo "Dodano rezerwację do bazy";
    $date = $_POST['date'];
    $number = $_POST['number'];
    $telephone = $_POST['telephone'];
    $query = "INSERT INTO rezerwacje VALUES(null,1,'$date','$number','$telephone');";
    echo $query;
    mysqli_query($conn, $query);
    mysqli_close($conn);
}
