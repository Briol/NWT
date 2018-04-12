<?php
include ("classes/DB.php");

if(isset($_POST['reservation'],$_POST['teacherId'],$_POST['groupeName'],$_POST['zoneId'],$_POST['reservationDate'],$_POST['reservationDuration'])) {
    if (filter_var($reservation,  FILTER_VALIDATE_INT))
        array_push($tabErreur, "Veuillez saisir votre reservation");
    if (filter_var($teacherId,  FILTER_VALIDATE_INT))
    	array_push($tabErreur, "Veuillez saisir votre teacherId");
    if (filter_var($groupeName,  FILTER_VALIDATE_INT))
    	array_push($tabErreur, "Veuillez saisir votre groupeName");
    if (filter_var($zoneId,  FILTER_VALIDATE_INT))
    	array_push($tabErreur, "Veuillez saisir votre zoneId");
    if (filter_var($reservationDate,  FILTER_VALIDATE_INT))
    	array_push($tabErreur, "Veuillez saisir votre reservationDate");
    if (filter_var($reservationDuration,  FILTER_VALIDATE_INT))
    	array_push($tabErreur, "Veuillez saisir votre reservationDate");
    if (count($tabErreur) != 0) {
        $message = "<ul>";
        for ($i = 0; $i < count($tabErreur); $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);
        $tabErreur = array();
        $teacher = htmlspecialchars($_POST['teacherId']);
        $groupe = htmlspecialchars($_POST['groupeName']);
        $zone = htmlspecialchars($_POST['zoneId']);
        $reservationDate = htmlspecialchars($_POST['reservationDate']);
        $reservationDuree = htmlspecialchars($_POST['reservationDuration']);

        $THAT = $db->prepare('INSERT INTO fteacherId (teacherId, groupeName, zoneId, reservationDate, reservationDuration) VALUES (?, ?, ?, ?, ?)');

        if ($THAT->execute()) {
            echo "<script>alert('La salle a été réservée !');</script>";
        } else {
            echo "<script>alert('La salle n\'a pas été réservée !');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORMULAIRE</title>
</head>
<body>
<form method="POST">
	<select name="teacherId">
		<?php
            $db=new DB();
            var_dump($db);
	        $intervenant = $db->query('SELECT * FROM teachers ORDER BY teacherId');
	        while($intervenants = $intervenant->fetch()) {
	    ?>
	        <option value="<?php echo htmlspecialchars($intervenants['teacherFirstName']); ?>"><?php echo htmlspecialchars($intervenants['teacherFirstName']); ?></option>
	    <?php } ?>
	</select>

	<select name="groupeName">
		<?php
	        $groupe = $db->query('SELECT * FROM groups ORDER BY groupId');
	        while($groupes = $groupe->fetch()) {
	    ?>
	        <option value="<?php echo htmlspecialchars($groupes['groupName']); ?>"><?php echo htmlspecialchars($groupes['groupName']); ?></option>
	    <?php } ?>
	</select>

	<select name="zoneId">
		<?php
	        $zone = $db->query('SELECT * FROM zones ORDER BY zoneId');
	        while($zones = $zone->fetch()) {
	    ?>
	        <option value="<?php echo htmlspecialchars($zones['zoneName']); ?>"><?php echo htmlspecialchars($zones['zoneName']); ?></option>
	    <?php } ?>
	</select>

	<input type="date" name="reservationDate">

	<select name="reservationDuration">
	    <option value="8h30-12h30">8h30 - 12h30</option>
	    <option value="13h00-17h30">13h00 - 17h30</option>
	    <option value="8h30-17h30">8h30 - 17h30</option>
	</select>

	<button type="submit" name="reservation" class="btn blue">Reserver la salle</button>
</form>
</body>
</html>