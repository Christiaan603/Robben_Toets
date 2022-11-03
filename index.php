<!DOCTYPE HTML>  
<html>
<head>
<script src="index.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>  

<?php
//defineer de variabele naar lege waardes
$name = $email = $geslacht= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $geslacht = test_input($_POST["Geslacht"]);
  }
  //neemt de input "test_input" en en converteert het en dat returnt ie de input
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<h2><?php echo "Hallo, $name";?></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" placeholder="<?php echo "$name"?>">
  <?php if (empty($_POST["name"])) {
    echo "Naam niet ingevuld";} ?><br>
  Email: <input type="text" name="email" placeholder="<?php echo "$email"?>">
  <?php if (empty($_POST["email"])) {
    echo "Email niet ingevuld";} ?><br><br>
  Geslacht:
  <input type="radio" id="gen1" name="Geslacht" value="L" onclick="red()" required>L
  <input type="radio" id="gen2" name="Geslacht" value="H" onclick="lightblue()" required>H
  <input type="radio" id="gen3" name="Geslacht" value="B" onclick="lightgreen()" required>B
  <input type="radio" id="gen4" name="Geslacht" value="T" onclick="lightcoral()"required>T
  <input type="radio" id="gen5" name="Geslacht" value="M" onclick="blue()"required>M
  <input type="radio" id="gen6" name="Geslacht" value="V" onclick="pink()"required>V <br>
  <label for="Beoordeling">Wilt u beoordelen:</label> 
<input type="checkbox" id="Beoordeling" onclick="myFunction()">

<p id="text" style="display:none">Beoordeling: <br>
<input type="radio" id="bo1" name="beoordeling" value="Slecht">slecht
  <input type="radio" id="bo2" name="beoordeling" value="Matig">matig
  <input type="radio" id="bo3" name="beoordeling" value="Goed">goed
  <input type="radio" id="bo4" name="beoordeling" value="Heel goed">heel Goed</p>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
?>

</body>
</html>
