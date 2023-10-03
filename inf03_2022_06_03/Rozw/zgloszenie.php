<?php
$conn = mysqli_connect("localhost","root","","wedkarstwo");
if (mysqli_connect_errno()) {
  echo "Błąd połączenia: " . mysqli_connect_error();
  exit();
}
if (isset($_POST['submit'])){
    unset($_POST['submit']);
    $lowisko=$_POST['lowisko'];
    $data=$_POST['data'];
    $sedzia=$_POST['sedzia'];
    $query="INSERT INTO zawody_wedkarskie VALUES(null, 0, $lowisko,'$data','$sedzia');";
    echo $query;
    mysqli_query($conn,$query);
    mysqli_close($conn);
}
?>