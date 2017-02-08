<?php

if (isset ($_GET['color'])) {
    switch ($_GET['color']) {
        case 1:
            $color = "#FF0000";
            break;
        case 2:
            $color = "#00FF00";
            break;
        case 3:
            $color = "#0000FF";
            break;
        case 4:
            $color = "#FFFF00";
            break;
        case 5:
            $face = rand(0, 3);
            $colors = ["#FF0000", "#00FF00", "#0000FF", "#FFFF00"];
            $color = $colors[$face];
            break;
        default:
            $color = "#FFFFFF";
            break;
    }
}
?>
<style>
    body {
        background-color: <?php echo $color; ?>
    }
</style>
<?php

if ((isset($_GET['age']) && $_GET['age'] > 25) && (isset($_GET['taille']) && $_GET['taille'] > 175) && isset($_GET['poids'])) {
    echo "Age : " . $_GET['age'] . " ans <br />";
    echo "Taille : " . $_GET['taille'] . " cm <br />";
    echo "Poids : " . $_GET['poids'] . " Kgs<br />";
} else {
    echo "Nope";
}