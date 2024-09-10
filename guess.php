<!DOCTYPE html>
<html>
<head>
    <!-- Required title tag with af97a874 -->
    <title>VIPUL AGRAWAL af97a874</title>
</head>
<body>
    <h1>Welcome to my guessing game</h1>

    <?php
    // Correct number for full credit
    $correctnumber = 30;

    // Check if the 'guess' parameter exists
    if (isset($_GET['guess'])) {
        // Check if the guess is a valid number
        if (!is_numeric($_GET['guess'])) {
            echo "Your guess is not a number";
        } 
        // Check if the guess is too low
        else if ($_GET['guess'] < $correctnumber) {
            echo "Your guess is too low";
        } 
        // Check if the guess is too high
        else if ($_GET['guess'] > $correctnumber) {
            echo "Your guess is too high";
        } 
        // If the guess is correct
        else if ($_GET['guess'] == $correctnumber) {
            echo "Congratulations - You are right";
        }
    } else {
        // If the 'guess' parameter is missing
        echo "Missing guess parameter <br> Your guess is too short";
    }
    ?>
</body>
</html>
