<!DOCTYPE HTML>  
<html>
<head>
<style>
body {
  background-color: yellow;
}
.error {color: red;}
h2 {
  color: Green;
  text-align: center;
}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $ttlErr= $tlpErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $ttl = $tlp = $motto = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nama harus diisi";
  } else {
    $name = test_input($_POST["name"]);
  }

if (empty($_POST["ttl"])) {
    $ttlErr = "Tempat Tanggal Lahir dibutuhkan";
  } else {
    $ttl = test_input($_POST["ttl"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email harus diisi";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format Email Salah";
    }
  }
if (empty($_POST["tlp"])) {
    $tlp = "";
  } else {
    $tlp = test_input($_POST["tlp"]);
    if(preg_match('/^\d+$/',$tlp)) {
      $tlpErr = "Hanya Berisi Angka";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";  
    }    
  }

  if (empty($_POST["motto"])) {
    $motto = "";
  } else {
    $motto = test_input($_POST["motto"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Jenis Kelamin Dibutuhkan";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Isi Form Dibawah!</h1>
<p><span class="error">* Wajib Diisi</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nama: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  TTL: 
  <input type="text" name="ttl">
  <span class="error">* <?php echo $ttlErr;?></span>
  <br><br>
  Jenis Kelamin:
  <input type="radio" name="gender" value="Perempuan">Perempuan
  <input type="radio" name="gender" value="Laki-Laki">Laki-Laki
  <input type="radio" name="gender" value="Lainnya">Lainnya 
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  No.Telp: <input type="text" name="tlp">
  <span class="error">* <?php echo $tlpErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Motto: <textarea name="motto" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="reset" value="Reset">
</form>

<?php
echo "<h2>Biodata</h2>";
echo "<center>Nama: " .$name;
echo "<br>";
echo "<center>TTL: " .$ttl;
echo "<br>";
echo "<center>Jenis Kelamin: " .$gender;
echo "<br>";
echo "<center>Email: " .$email;
echo "<br>";
echo "<center>No. Telp: " .$tlp;
echo "<br>";
echo "<center>Website: " .$website;
echo "<br>";
echo "<center>Motto: " .$motto;
echo "<br>";
?>

</body>
</html>