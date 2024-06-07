<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: pink;
        }

        .form-container {
            background-color: black;
            padding: 20px;
            border-radius: 25px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            
        }
        
        .form-container h1{
           text-align: center;
           margin-bottom: 20px;
           color:whitesmoke;
           font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .form-container label {
            justify-content: center;
            align-items: center;
            display: block;
            margin-bottom: 8px;
            color: whitesmoke;
            font-size:larger;
        }

        .form-container input[type="text"],
        .form-container input[type="text"],
        .form-container input[type="password"] {
            justify-content: center;
            align-items: center;
            width: 315px;
            padding: 8px;
            margin-bottom: 20px;
            border: 8px solid #ccc;
            border-radius: 4px;
            color: black;}

        .form-container input[type="submit"] {
            width: 40%;
            display:block;
            padding: 10px;
            background-color:palevioletred;
            color: white;
            border:none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin: 0 auto;
        }

        .form-container input[type="submit"]:hover {
            background-color: green;
        }

        .form-container select {
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            background-color:whitesmoke ;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333; 
        }


    </style>
</head>

<body>
<div class="form-container">
        <h1> Registration </h1>
        <form action="insert.php" method="post">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="">Please select</option>
            <option value="lecturer">Lecturer</option>
            <option value="student">Student</option>
        </select><br>
        <input type="submit" name="submit" value="Register">
    </form>
</div>
</body>

</html>