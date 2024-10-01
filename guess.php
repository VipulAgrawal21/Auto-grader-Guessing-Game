<html>
<body>
<title>Vipul af97a874</title> <!-- Ensure the title tag includes the required string -->

<h1>Welcome to my guessing game</h1>

<?php
$correctnumber = 30; // The correct number as per the assignment

if (isset($_GET['guess'])) { // Check if the 'guess' parameter is set
    if (!is_numeric($_GET['guess'])) { // If the guess is not a number
        echo "Your guess is not a number";
    } else if ($_GET['guess'] < $correctnumber) { // If the guess is too low
        echo "Your guess is too low";
    } else if ($_GET['guess'] > $correctnumber) { // If the guess is too high
        echo "Your guess is too high";
    } else { // If the guess is correct
        echo "Congratulations - You are right";
    }
} else {
    echo "Missing guess parameter <br> Your guess is too short"; // Handle missing 'guess' parameter
}
?>

</body>
</html>
