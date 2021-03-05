
<?php
$favcolor="red";
switch ($favcolor){
    case "red":
        echo "Color red!";
        break;
    case "blue":
        echo "Blue color";
        break;
    default:
        echo "No color";
}

$myGrade = 79;
switch ($myGrade){
    case $myGrade<60:
        echo "Bahong 3!";
        break;
    case $myGrade<80:
        echo "Bahong 4!";
        break;
    default:
        echo "bahong 5!";
}

// select distinct(city) from station where city like "a%" or city like "u%" or city like "e%" or city like "o%" or city like "i%"

// select distinct(city) from station where substr(city,1,1) in ("a","e","i","o","u")
// select distinct(city) from station where left(city,1) in ("a","e","i","o","u")
?>