<?php
if (empty($_GET['nama'])){
    header("Location:empty.php");
}else echo "<center>Nama :".$_GET['nama']."</center><br>";
if (empty($_GET['email'])){
    header("Location:empty.php");
}else echo "<center>Email :".$_GET['email']."</center><br>";
?>
<?php
echo "<center>" . date("l, Y/m/d h:i:s a") . "</center><br>";
?>