<?php include("top.html"); ?>

<?php 
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $personality_type = $_POST["personality-type"];
    $favorite_OS = $_POST["favorite-os"];
    $seeking_age_min = $_POST["seeking-age-min"];
    $seeking_age_max = $_POST["seeking-age-max"];
    $to_write = array(
            $name, $gender, $age, $personality_type, $favorite_OS, $seeking_age_min, $seeking_age_max
    );
    $to_write=implode(",",$to_write);
    file_put_contents("singles.txt", PHP_EOL.$to_write, FILE_APPEND);
?>

<strong>Thank you!</strong>
<br>
<br>
Welcome to NerdLuv, <?php print($name)?>!

<br>
<br>

Now <a href="matches.php">log in to see your matches!</a>
<br>
<br>

<?php include("bottom.html"); ?>