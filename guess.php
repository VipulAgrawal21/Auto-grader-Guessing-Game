<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game - af97a874</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>

    <?php
    // Define the correct answer
    $correctNumber = 30;

    // Check if the 'guess' parameter exists in the URL
    if ( !isset($_GET['guess']) ) {
        echo "<p>Missing guess parameter</p>";
    } else if ( strlen($_GET['guess']) < 1 ) {
        echo "<p>Your guess is too short</p>";
    } else if ( !is_numeric($_GET['guess']) ) {
        echo "<p>Your guess is not a number</p>";
    } else {
        // Convert the input to an integer
        $guess = intval($_GET['guess']);

        // Check if the guess is correct, too low, or too high
        if ( $guess < $correctNumber ) {
            echo "<p>Your guess is too low</p>";
        } else if ( $guess > $correctNumber ) {
            echo "<p>Your guess is too high</p>";
        } else {
            echo "<p>Congratulations - You are right!</p>";
        }
    }
    ?>

</body>
</html>
