<?php
$nb1  = 36;
$nb2  = 71;
$som  = $nb1 + $nb2;
$diff = $nb1 - $nb2;
$prod = $nb1 * $nb2;
$avhh = $nb1 / $nb2;

$prix = 12;
$qte = 5;
$TxTVA = 5.5;
$montantHT = 12 * 5;
$tva = ($montantHT * $TxTVA) / 100;
$totalTTC = $montantHT + $tva;
?>
<table>
    <tr>
        <td>Prix</td>
        <td><?= $prix ?></td>
    </tr>
    <tr>
        <td>Qté</td>
        <td><?= $qte ?></td>
    </tr>
    <tr>
        <td>Taux TVA</td>
        <td><?= $TxTVA ?></td>
    </tr>
    <tr>
        <td>Montant HT</td>
        <td><?= $montantHT ?></td>
    </tr>
    <tr>
        <td>TVA</td>
        <td><?= $tva ?></td>
    </tr>
    <tr>
        <td>TTC</td>
        <td><?= $totalTTC ?></td>
    </tr>
</table>
