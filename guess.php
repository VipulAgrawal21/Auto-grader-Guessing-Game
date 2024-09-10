<?php
// Initialize variables
$choices = ["rock", "paper", "scissors"];
$player_choice = "";
$computer_choice = "";
$result = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player_choice = $_POST['choice'];
    $computer_choice = $choices[array_rand($choices)];

    if ($player_choice == $computer_choice) {
        $result = "It's a tie!";
    } elseif (
        ($player_choice == "rock" && $computer_choice == "scissors") ||
        ($player_choice == "paper" && $computer_choice == "rock") ||
        ($player_choice == "scissors" && $computer_choice == "paper")
    ) {
        $result = "You win!";
    } else {
        $result = "You lose!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors - af97a874</title>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <form method="post" action="">
        <label for="choice">Choose Rock, Paper, or Scissors:</label>
        <select name="choice" id="choice">
            <option value="rock">Rock</option>
            <option value="paper">Paper</option>
            <option value="scissors">Scissors</option>
        </select>
        <button type="submit">Play</button>
    </form>

    <?php if ($player_choice): ?>
        <h2>Results</h2>
        <p>Your choice: <?php echo htmlspecialchars($player_choice); ?></p>
        <p>Computer's choice: <?php echo htmlspecialchars($computer_choice); ?></p>
        <p>Result: <?php echo htmlspecialchars($result); ?></p>
    <?php endif; ?>
</body>
</html>
