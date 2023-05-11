<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2</h1>
    <form method="POST" action="success.php">
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br><br>

        <label for="university">University:</label>
        <input type="text" name="university" id="university" required><br><br>

        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
        <input type="hidden" name="phone" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
