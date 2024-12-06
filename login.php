<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <form action="login_process.php" method="post" class="login-form">
            <h2>Login</h2>
            <?php
            if(isset($_GET['error'])) {
                echo "<p class='error'>Username atau password salah!</p>";
            }
            ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>
    </div>


    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 30px;
    width: 350px;
}

.login-form h2 {
    text-align: center;
    color: #6a0dad;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #6a0dad;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s;
}

.form-group input:focus {
    border-color: #6a0dad;
}

.login-button {
    width: 100%;
    padding: 10px;
    background-color: #6a0dad;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-button:hover {
    background-color: #5a0b9d;
}

.signup-link {
    text-align: center;
    margin-top: 15px;
    color: #666;
}

.signup-link a {
    color: #6a0dad;
    text-decoration: none;
}

.signup-link a:hover {
    text-decoration: underline;
}
    </style>
</body>
</html>