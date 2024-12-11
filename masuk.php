<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <video autoplay loop muted playsinline class="background-video">
            <source src="images/video.mp4" type="video/mp4">
        </video>
        <div class="form-box">
        <form action="login.php" method="POST">
    <h2>Login</h2>
    <div class="inputbox">
        <ion-icon name="mail-outline"></ion-icon>
        <input type="email" name="email" required>
        <label>Email</label>
    </div>
    <div class="inputbox">
        <ion-icon name="lock-closed-outline"></ion-icon>
        <input type="password" name="password" required>
        <label>Password</label>
    </div>
    <div class="show-password">
        <input type="checkbox" id="showPassword" onclick="togglePassword()">
        <label for="showPassword">Show Password</label>
    </div>
    <div class="forget">
        <label><input type="checkbox"> Remember Me</label>
        <a href="#">Forget Password?</a>
    </div>
    <a href="login.php"> <button type="submit">Log in</button></a>
    <div class="register">
        <p>Don't have an account? <a href="daftar.php">Register</a></p>
    </div>
</form>


        </div>
    </section>

    <!-- JavaScript untuk toggle password -->
    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const checkbox = document.getElementById("showPassword");
            // Mengubah tipe input password menjadi text atau password
            passwordField.type = checkbox.checked ? "text" : "password";
        }
    </script>
</body>

</html>
