<?php

function logical_method()
{
    for ($a = 1; $a <= 30; $a++) {
        for ($i = 1; $i <= $a; $i++) {
            echo $i . ' ';
        }
        echo "<br />";
    }
}

function arithmetical_method()
{
    $result = 1;

    for ($i = 1; $i < 9; $i++) {
        $j      = $i;
        $result = $result * 10 + $j + 1;
        echo $result . '<br />';
    }
}

function hn()
{
    for ($i = 0; $i < 7; $i++) {
        echo "<h" . $i . ">Hello World</h" . $i . ">";
    }
}

function cube()
{
    $a = 5;
    for ($i = 0; $i < $a; $i++) {
        echo "A";
        for ($j = 0; $j < $a - 2; $j++) {
            if ($i == 0 || $i == $a - 1) {
                echo "A";
            } else {
                echo "A";
            }
        }
        echo "A <br />";
    }
}

function cube2()
{
    $a = 7;
    for ($i = 0; $i <= $a; $i++) {
       // echo "A";
        for ($j = 0; $j <= $i - 2; $j++) {
            echo "A";
        }
        echo "<br />";
    }
}

cube2();