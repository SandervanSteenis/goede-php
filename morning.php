<?php
        date_default_timezone_set("Europe/Amsterdam");
        $time = date("H:i:s");
        
        if ($time < "06:00") {
            $message = "Goede nacht!";
            $image = "backgrounds/night.png";
        } 
        elseif ($time < "12:00") {
            $message = "Goede morgen!";
            $image = "backgrounds/morning.png";
        } 
        elseif ($time < "18:00") {
            $message = "Goede middag!";
            $image = "backgrounds/afternoon.png";
        } 
        else {
            $message = "Goede avond!";
            $image = "backgrounds/evening.png";
        }

        $message .= "<br> <br>" . $time;
    ?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
	<title>Hoe laat is het?</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="img/clock.png"/>
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
</head>
<body style="background-image: url(<?php echo $image; ?>); background-size: cover;">
    <?php echo "<p>" . $message . "</p>"; ?>	
</body>
</html>