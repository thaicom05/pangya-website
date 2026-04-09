<?php
// index.php

// Function to get server status
function getServerStatus() {
    // Assume this function fetches the server status from an API or database
    return "Online"; // Example status
}

// Function to get news
function getNews() {
    // Example news array
    return [
        "New features released!",
        "Server maintenance scheduled for next week.",
        "Join our community events!"
    ];
}

// Function to get rankings
function getRankings() {
    // Example rankings array
    return [
        ["player" => "Player1", "score" => 1500],
        ["player" => "Player2", "score" => 1200],
        ["player" => "Player3", "score" => 1100]
    ];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangya Home</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>

    <!-- Hero Section -->
    <section id="hero">
        <h1>Welcome to Pangya!</h1>
        <p>Your ultimate golfing experience awaits.</p>
    </section>

    <!-- Server Status -->
    <section id="server-status">
        <h2>Server Status</h2>
        <p>Status: <?php echo getServerStatus(); ?></p>
    </section>

    <!-- News Section -->
    <section id="news">
        <h2>Latest News</h2>
        <ul>
        <?php foreach(getNews() as $newsItem): ?>
            <li><?php echo $newsItem; ?></li>
        <?php endforeach; ?>
        </ul>
    </section>

    <!-- Rankings Section -->
    <section id="rankings">
        <h2>Player Rankings</h2>
        <table>
            <tr>
                <th>Player</th>
                <th>Score</th>
            </tr>
            <?php foreach(getRankings() as $ranking): ?>
                <tr>
                    <td><?php echo $ranking['player']; ?></td>
                    <td><?php echo $ranking['score']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <!-- Call to Action -->
    <section id="cta">
        <h2>Join Us Now!</h2>
        <a href="signup.php" class="cta-button">Sign Up</a>
    </section>

</body>
</html>
