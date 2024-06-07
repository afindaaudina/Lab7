<?php
include 'Database.php';
include 'User.php';


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['matric'])) {
    $matric = $_GET['matric'];


    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);
    $userDetails = $user->getUser($matric);


    $db->close();

    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update User</title>
        </head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: black;
                margin: 0;
                padding: 20px;
            }
            form {
                background-color: pink;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                margin: 0 auto;
            }
            h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            label {
            display: block;
            margin-bottom: 10px;
            }
            input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            input[type="submit"] {
            background-color: palevioletred;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }
            input[type="submit"]:hover {
            background-color: green;
            }
        
        </style>


        <body>
            <?php if ($userDetails): ?>
            <form action="update.php" method="post">
            <input type="hidden" name="matric" value="<?php echo $userDetails['matric']; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $userDetails['name']; ?>"><br>
            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="">Please select</option>
                <option value="lecturer" <?php if ($userDetails['role'] == 'lecturer')
                    echo "selected" ?>>Lecturer</option>
                    <option value="student" <?php if ($userDetails['role'] == 'student')
                    echo "selected" ?>>Student</option>
                </select><br>
                <input type="submit" value="Update">

            </form>
            <?php else: ?>
                <p>ERROR: User details not found.</p>
                <?php endif; ?>
        </body>
    </html>
    <?php
    } else {
        echo "ERROR: Missing or invalide matric parameter.";
    }

?>