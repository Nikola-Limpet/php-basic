<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>

    <body>

      <?php
      echo "<h1>Hello, World!</h1>\n";
      ?>

      <!-- <?php phpinfo(); ?> -->

    <?php 
    echo $_SERVER['HTTP_USER_AGENT'] . "\n";
    ?>


    <?php 
    if(str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
      ?>
      <h3>str_contains() returned true</h3>
      <p>You are using Firefox</p>
        <?php
        echo strtoupper("You are using Firefox.\n");
        ?>
      <?php

    } else {
      ?>
        <?php
        echo strtoupper("You are using a different browser.\n");
        ?>
        <h3>str_contains() returned false</h3>
        <p>You are using a different browser</p>
      <?php
    }

    ?>
    </body>

</html>