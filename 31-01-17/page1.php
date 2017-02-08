<?php
/**
 * Created by PhpStorm.
 * User: allardk
 * Date: 31/01/17
 * Time: 08:44
 */

if (!isset($_GET['nb']))
    echo "Variable non instanciée";
else
    echo $_GET['nb'];