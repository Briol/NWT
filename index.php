<?php
include ("classes/Intervenant.php");
include ("classes/Groupe.php");
include ("classes/Salle.php");
include ("classes/Reservation.php");
?>

<form method="post" action="">
    <select>
        <option><?php Intervenant(); ?></option>
    </select>
    <select>
        <option><?php Groupe?></option>
    </select>
    <select>
        <option><?php Salle?></option>
    </select>
    <input type="date" name="dateChoisie" id="dateChoisie">
</form>