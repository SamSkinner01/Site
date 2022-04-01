<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 3</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="top">
        <h1>How lucky are you today?</h1>
    </div>

    <div class="middle">
        <?php
        $luck = rand(0, 100);
        if ($luck == 100) {
        ?>
            <p>
                You are super lucky! Your results show
                <span class="luck">
                    <?php
                    print $luck;
                    ?>% luck!
                </span>
            </p>
        <?php
        } elseif ($luck >= 80) {
        ?>
            <p>
                You have really good luck! Your results show
                <span class="luck">
                    <?php
                    print $luck;
                    ?>% luck!
                </span>
            </p>
        <?php
        } elseif ($luck >= 65) {
        ?>
            <p>
                You have some good luck! Your results show
                <span class="luck">
                    <?php
                    print $luck;
                    ?>% luck!
                </span>
            </p>
        <?php
        } else {
        ?>
            <p>
                Sorry, but your luck isn't super good. Your results show
                <span class="luck">
                    <?php
                    print $luck;
                    ?>% luck!
                </span>
                Better luck next time!
            </p>
        <?php
        }
        ?>
    </div>


    <div class="bottom">
        <p>Come back tomorrow to try your luck again!</p>
    </div>



</body>

</html>