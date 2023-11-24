<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Погода</title>
</head>
<body>
    <div class="weather-container">
        <?php
            include('weather.php');
            $weather = getWeather();
            echo "<h2>Погода в городе: {$weather['city']}</h2>";
            echo "<p>Температура: {$weather['temperature']}</p>";
            echo "<p>Состояние: {$weather['condition']}</p>";
        ?>
    </div>
</body>
</html>