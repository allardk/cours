<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['number1']) && isset($_POST['number2'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        echo "Nombre 1 : " . $number1 . "<br />";
        echo "Nombre 2 : " . $number2 . "<br />";

        if ($number1 > $number2) {
            echo "N1 et supérieur à N2";
        } elseif ($number1 < $number2) {
            echo "N2 et supérieur à N1";
        } else {
            echo "N1 et égal à N2";
        }
    }
}