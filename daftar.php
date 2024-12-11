<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <!-- Background Video -->
        <video autoplay loop muted playsinline class="background-video">
            <source src="images/video.mp4" type="video/mp4">
        </video>

        <!-- Form Box -->
        <div class="form-box">
            <form action="register.php" method="POST">
                <h2>Register</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="fullname" required>
                    <label>Full Name</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="school-outline"></ion-icon>
                    <input type="text" name="institution" required>
                    <label>Institution</label>
                </div>
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
                <button type="submit" name="register">Register</button>
                <div class="register">
                    <p>Already have an account? <a href="masuk.php">Login here</a></p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
