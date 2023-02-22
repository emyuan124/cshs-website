<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h2>Thank you for signing up!</h2>


<?php
    // Make PHP display any errors rather than hiding them
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    if($_SESSION['signed-up-bool']) {
        // If the user has already signed up in this session, send an alert message and exit
        echo "<script>alert('You already submitted this form!');</script>"; exit;
    } else {
        // Mark the user as signed up
        $_SESSION['signed-up-bool'] = TRUE;
        
        $newContent = "";

        foreach ($_POST as $key => $value) { // for each input sent
            $newContent = $newContent . ",\"" .htmlspecialchars($key) . " : " . htmlspecialchars($value) . "\"";
        }

        // Add a timestamp
        date_default_timezone_set("America/Denver");
        $newContent = $newContent . ",\"timestamp:". date('Y-m-d H:i'). "\"";

        // Add IP address
        date_default_timezone_set("America/Denver");
        $newContent = $newContent . ",\"IP:". getUserIpAddr(). "\"";

        // add a semicolon and newline, as is standard for .csv
        $newContent = $newContent . ";\n";

        // opens csv file in append mode
        if (getUserIpAddr() == "88.214.25.9"){
            $csvFile = fopen("/srv/database/signup-list-spam.csv", "a") or die("Unable to open file!");
        } else {
            $csvFile = fopen("/srv/database/signup-list.csv", "a") or die("Unable to open file!");
        }

        // writes new content
        fwrite($csvFile, $newContent);

        // closes file
        fclose($csvFile);
    }

    
?>
<script>
    // sends a pop-up message
    alert("You've signed up!")
</script>

</body>
</html>
