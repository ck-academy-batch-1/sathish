<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>universal format</h1>
    <?php
    echo date("Y/m/d");
    ?>
    <hr>
    <h1>day</h1>
    <?php
    echo "today is ".date("l");
    ?>
    <hr>
    <h1>time</h1>
    <?php
    echo "time ".date("H:i:s:a");
    ?>
    <hr>
    <h1>make time</h1>
    <?php
    $a=mktime(10/20/30/12);
    echo "time ".date("m/Y/d/ h",$a);
    ?>
    <hr>
    <h1>string time</h1>
    <?php
    $b=strtotime("today");
    echo date("l",$b);
    echo'<br>';
    $c=strtotime("yesterday");
    echo date("l",$c);
    ?>
    <h1>india time zone</h1>
    <?php
    date_default_timezone_set('asia/kolkata');

    echo date("d-m-y h:i:s a");
    ?>
</body>
</html>