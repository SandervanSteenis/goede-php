<?php
        date_default_timezone_set("Europe/Amsterdam");
        $time = date("H:i:s");
        
        if ($time < "06:00") {
            $message = "Goede nacht!";
            $imageURL = "backgrounds/night.png";
        } 
        elseif ($time < "12:00") {
            $message = "Goede morgen!";
            $imageURL = "backgrounds/morning.png";
        } 
        elseif ($time < "18:00") {
            $message = "Goede middag!";
            $imageURL = "backgrounds/afternoon.png";
        } 
        else {
            $message = "Goede avond!";
            $imageURL = "backgrounds/evening.png";
        }

        $message .= "<br> <br>" . $time;
    ?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Hoe laat is het?</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="img/clock.png"/>
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
</head>
<body style="background-image: url(<?php echo $imageURL; ?>); background-size: cover;">
    <?php echo "<p>" . $message . "</p>"; ?>	
</body>
</html>