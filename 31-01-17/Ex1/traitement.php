<?php
/**
 * Created by PhpStorm.
 * User: allardk
 * Date: 31/01/17
 * Time: 09:22
 */

if (isset($_POST['send'])) {
    if (isset($_POST['name']) && isset($_POST['email'])) {
        echo "Nom : " . $_POST['name'];
        echo "<br>Email : " . $_POST['email'];
    }
} else {
    echo "Error";
}