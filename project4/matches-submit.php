<?php include("top.html"); ?>

<?php 
    $returning_user_name = $_GET["returning_user_name"]; //Get user name
    $user_info; //array containing all values for returning user
    $singles = file("singles.txt"); //Get file
    for($i = 0; $i < count($singles); $i++){
        $user = explode(",", $singles[$i]);
        //If username matches return all user info
        if($user[0] == $returning_user_name){
            $user_info = $user;
        }
    }

?>

<strong>Matches for <?php print $user_info[0]; ?></strong>
<br>

<?php


     for($i = 0; $i < count($singles); $i++){
         //User to compare values to.
         $compare_user = explode(",", $singles[$i]);
        
         
         //If same gender go to next person
        if($user_info[1] == $compare_user[1]){
            continue;
        } 

        // index [5] min age, index [6] max age
        // if greater than max age and less than min age, next person
        if($user_info[5] > $compare_user[2] or $user_info[6] < $compare_user[2]){
            continue;
        }
        if($compare_user[5] > $user_info[2] or $compare_user[6] < $user_info[2]){
            continue;
        }

        //If Operating Systems are not the same, not match
        if($user_info[4] != $compare_user[4]){
            continue;
        }

        //Compare persoanlity 
        $user_personality = $user_info[3];
        $compare_personality = $compare_user[3];
        $counter = 0;
        for($j=0; $j < strlen($user_personality); $j++){
            if($user_personality[$j] == $compare_personality[$j]){
                $counter++;
            }
        }

        //Need at least 2 similarities to match
        if($counter < 1){
            continue;
        }

        ?>

        <!-- Adding Matches -->
        <div class="match">
            <p>
                <img src="user.jpg" alt="<?php print($compare_user[0]);?>">
                <?php print($compare_user[0]);?>
            </p>

            <ul>
                <li><strong>gender:</strong><?php print($compare_user[1]);?></li>
                <li><strong>age:</strong><?php print($compare_user[2]);?></li>
                <li><strong>type:</strong><?php print($compare_user[3]);?></li>
                <li><strong>OS:</strong><?php print($compare_user[4]);?></li>
            </ul>
        </div>

        <?php
    }

?>


<?php include("bottom.html"); ?>