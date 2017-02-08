<!DOCTYPE html>
<html>
<head></head>
<style>
    .square > div {
        margin : 5px;
    }
</style>
<body>
<div>Lien 1 : page1.php -> Lien simple : <a href="page1.php">Lien 1</a></div>
<div>Lien 2 : page1.php -> Lien avec une variable (nb) ayant pour valeur 32 : <a href="page1.php?nb=32">Lien 2</a></div>
<div>Lien 3 : page2.php -> Lien avec 3 valeurs : <a href="page2.php?taille=180&age=27&poids=80">Lien 3</a></div>
<div class="square">
    <a href="page2.php?color=1">
        <div style="height: 60px; width: 60px; background-color: #FF0000;"></div>
    </a>
    <a href="page2.php?color=2">
        <div style="height: 60px; width: 60px; background-color: #00FF00;"></div>
    </a>
    <a href="page2.php?color=3">
        <div style="height: 60px; width: 60px; background-color: #0000FF;"></div>
    </a>
    <a href="page2.php?color=4">
        <div style="height: 60px; width: 60px; background-color: #FFFF00;"></div>
    </a>
    <a href="page2.php?color=5">
        <div>Random</div>
    </a>
</div>
</body>
</html>