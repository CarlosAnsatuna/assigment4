<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Form</title>
</head>
<body>

    <h2>Enter 5 Numbers</h2>
    <form action="process.php" method="POST">
        <label for="a">Number A:</label>
        <input type="number" id="a" name="a" required><br><br>

        <label for="b">Number B:</label>
        <input type="number" id="b" name="b" required><br><br>

        <label for="c">Number C:</label>
        <input type="number" id="c" name="c" required><br><br>

        <label for="d">Number D:</label>
        <input type="number" id="d" name="d" required><br><br>

        <label for="e">Number E:</label>
        <input type="number" id="e" name="e" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
