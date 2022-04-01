<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Plan Moon Trip!</title>
    <link rel="stylesheet" href="homework4.css">
    <link rel="icon" href="favicon.png" />
  </head>
  <body>

    <?php
    $first_name = $_GET["first_name"];
    $last_name = $_GET["last_name"];
    $date = $_GET["date"];
     ?>
    <div class="image">
      <div class="input">

        <h1>Thank you for scheduling a visit!</h1>
        <h2>Please review the details to confirm.</h2>
        <p>First name:
          <?php
          print $first_name;
           ?>
        </p>
        <p>Last name:
          <?php
          print $last_name;
           ?>
        </p>
        <p>Date of Visit:
          <?php
          print $date;
           ?>
        </p>

      </div>

    </div>

  </body>
</html>
