<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #00FFFF;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #708090;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
}

table td {
    padding: 10px;
}

table td:first-child {
    width: 30%;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: 	#E0FFFF;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="proses_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Login">
        <p>Belum mempunyai akun? 
            <a href="register.php">Ayo Daftar</a>
        </p>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>