<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$prenom = "John";
$nom    = "Doe";
$age    = 25;

echo "Bonjour $prenom $nom, comment allez-vous ?";
?>
<br/>
<?php
echo 'Bonjour ' . $prenom . ' ' . $nom . ', comment allez-vous ?';
?>
<br/>
<h2>Nom :</h2>
<?= $nom ?>
<h2>Prénom :</h2>
<?= $prenom ?>
<h2>Age :</h2>
<?= $age; ?>
<br/>
<?php
echo "L'élève $prenom à $age ans";
?>
<br/>
<?php
echo 'L\'élève ' . $prenom . ' à ' . $age . ' ans';
?>
<br/>
<?php
$nom    = "Dupont";
$prenom = "Henri";
$age    = 32;
?>
</body>
</html>