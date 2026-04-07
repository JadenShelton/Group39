<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Palette - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="color.css">
</head>
<body>
    <div class="header">
        <div class="center">
            <img src="./PotOGold.png" class="logo">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./color.php">Colors</a></li>
                <li><a href="./about.php">About</a></li>
            </ul>
        </div>
    </div>

    <div class="container one">
        <h2>Generate Your Color Grid!</h2>
       <form action="">
            <label for="size">How many rows and columns? (must be between 1 and 26): </label>
            <input type="number">
            <label for="colors">How many colors? (must be between 1 and 10): </label>
            <input type="number">
            <input type="submit" value="Sumbit">
       </form>
    </div>

    <div class="footer">Copyright © Lucky Palette 2026</div>
</body>
</html>