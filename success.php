<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>
<body>
    <?php
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $location = htmlspecialchars($_POST['location']);
        $age = htmlspecialchars($_POST['age']);
        $university = htmlspecialchars($_POST['university']);

        // Basic validation
        if(empty($name) || empty($phone) || empty($email) || empty($location) || empty($age) || empty($university)) {
            echo "Please fill out all fields";
            exit();
        }
    ?>

    <h1>Success</h1>
    <p>Thank you for filling the form <?php echo $name; ?>.</p>
</body>
</html>
