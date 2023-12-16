<!DOCTYPE html>
<html>

<head>
    <title>ExpressHub - Online courier System</title>
    <style>
        body {
            background-image: url("https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg");
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 4em;
            margin-top: 100px;
        }

        .btn {
            background-color: #1e90ff;
            color: white;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.5em;
            margin: 10px;
            cursor: pointer;
            border-radius: 30px;
        }

        .btn:hover {
            background-color: #4CAF50;
        }

        .btn-admin {
            background-color: #FF8C00;
        }
    </style>
</head>

<body>
    <h1>Welcome to ExpressHub</h1>
    
    <div>
        <a href="admin/index.php" class="btn btn-admin">Admin Login</a>
    </div>

    <div>
        <a href="index.php" class="btn btn-user">User Login</a>
    </div>
</body>

</html>