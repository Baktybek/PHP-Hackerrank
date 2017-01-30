<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    echo rand(0,100000000);
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $name = "Kyrgyzstan";
    echo substr($name, (rand(0, (strlen($name-1)))), 1);
    ?>
    </p>
</html>
