<!-- login.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short icon" type="x-icon" href="../../source/Image/Raying.png">
    <!-- Bootstrap and Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php include('../../LandingPage/landingheader.php'); ?>

    <div class="login-container mt-5">
        <form action="" method="post">
            <div class="logo-container mt-2">
                <img src="\RayingBHouse\source\Image\Raying.png" alt="Logo" class="img-fluid rounded-circle mb-2" width="200" height="200">
            </div>
            <div class="form-group">
                <label for="id">Username</label>
                <input type="text" id="id" name="id">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-container">
                    <input type="password" id="password" name="password">
                </div>
                <div class="input-container mt-1">
                    <a class="show-password" onclick="togglePasswordVisibility()">👁️ Show Password</a>
                </div>
            </div>
            <input type="submit" value="Login" class="mt-1">
        </form>
        <div class="register-label">
            <label>Don't have an account? <a href="registerform.php">Register</a></label>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var showPasswordButton = document.querySelector('.show-password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordButton.innerHTML = '👀 Hide Password';
            } else {
                passwordInput.type = 'password';
                showPasswordButton.innerHTML = '👁️ Show Password';
            }
        }

        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.remove();
            }
        }, 10000); // 10 seconds in milliseconds
    </script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding-top: 56px; /* Adjust padding-top to match the height of the navbar */
            background-size: cover;
            background-position: center;
            background-image: url('../../source/Image/bh.webp');
            height: 100vh;
        }

        .login-container {
            max-width: 400px;
            margin: 30px auto;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color: #bd2727;
            text-align: center;
        }

        .logo-container {
            text-align: center;
        }

        .logo {
            max-width: 50%;
            height: auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 0px;
        }

        label {
            color: #555;
            font-size: 1.2em;
        }

        .input-container {
            position: relative;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 27px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 0px;
            margin-top: 0px;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            color: red;
            text-align: center;
        }

        .register-label {
            margin-top: 10px;
            text-align: center;
        }

        .show-password {
            text-align: center;
            font-size: 17px;
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }

        .register-label label {
            font-size: 14px;
            color: #333;
        }

        .register-label a {
            color: #007bff;
            text-decoration: none;
        }

        .register-label a:hover {
            text-decoration: underline;
        }
    </style>
    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
