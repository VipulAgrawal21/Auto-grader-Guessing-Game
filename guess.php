<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>af97a874 </title>
      <title>Vipul Agrawal </title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>

    <?php
    // Define the correct number (must be 30 as per the assignment)
    $correct_number = 30;

    // Check if the 'guess' parameter is set in the URL (via GET request)
    if (isset($_GET['guess'])) {
        // Sanitize the input to avoid security issues
        $guess = $_GET['guess'];

        // Check if the guess is a valid number
        if (!is_numeric($guess)) {
            echo "<p>Your guess is not a valid number.</p>";
        } else {
            $guess = intval($guess);

            // Compare the guess to the correct number
            if ($guess < $correct_number) {
                echo "<p>Your guess is too low.</p>";
            } elseif ($guess > $correct_number) {
                echo "<p>Your guess is too high.</p>";
            } else {
                echo "<p>Congratulations - You are right!</p>";
            }
        }
    } else {
        echo "<p>Please enter a guess.</p>";
    }
    ?>

    <!-- Form for submitting the guess -->
    <form method="get">
        <label for="guess">Enter your guess:</label>
        <input type="text" name="guess" id="guess">
        <input type="submit" value="Submit Guess">
    </form>
</body>
</html>
