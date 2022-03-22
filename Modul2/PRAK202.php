<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $nimErr = $genderErr = "";
$name = $nim = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nama Tidak Boleh Kosong";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["nim"])) {
    $nimErr = "NIM Tidak Boleh Kosong";
  } else {
    $nim = test_input($_POST["nim"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Jenis Kelamin Tidak Boleh Kosong";
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
<h2>Soal 2</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  NIM: <input type="text" name="nim">
  <span class="error">* <?php echo $nimErr;?></span>
  <br><br>
  Jenis Kelamin:
  <input type="radio" name="gender" value="Laki-Laki">Laki-Laki
  <input type="radio" name="gender" value="Perempuan">Perempuan
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Hasil Input:</h2>";
echo $name;
echo "<br>";
echo $nim;
echo "<br>";
echo $gender;
?>

</body>
</html>