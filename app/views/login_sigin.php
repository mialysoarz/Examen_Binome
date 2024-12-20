<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signin</title>
    <style>
        /* Base styling */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #d9539e;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #d9539e;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #c6458d;
        }

        .toggle-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .toggle-link a {
            color: #d9539e;
            text-decoration: none;
        }

        .toggle-link a:hover {
            text-decoration: underline;
        }

        /* Christmas decorations */
        .background-stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .star {
            position: absolute;
            width: 3px;
            height: 3px;
            background-color: #fff;
            border-radius: 50%;
            animation: sparkle 2s infinite ease-in-out;
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0.2;
                transform: translateY(0);
            }
            50% {
                opacity: 1;
                transform: translateY(-20px);
            }
        }

        .gift {
            position: absolute;
            width: 50px;
            height: 50px;
            background: url('https://cdn-icons-png.flaticon.com/512/1533/1533876.png') no-repeat center/contain;
            animation: float 3s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <div class="background-stars">
        <!-- Generating stars dynamically -->
        <script>
            for (let i = 0; i < 50; i++) {
                const star = document.createElement('div');
                star.classList.add('star');
                star.style.top = Math.random() * 100 + '%';
                star.style.left = Math.random() * 100 + '%';
                star.style.animationDelay = Math.random() * 2 + 's';
                document.body.appendChild(star);
            }

            for (let i = 0; i < 5; i++) {
                const gift = document.createElement('div');
                gift.classList.add('gift');
                gift.style.top = Math.random() * 80 + '%';
                gift.style.left = Math.random() * 80 + '%';
                gift.style.animationDelay = Math.random() * 3 + 's';
                document.body.appendChild(gift);
            }
        </script>
    </div>

    <div class="container" id="login-container">
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <label for="login-email">Email:</label>
                <input type="email" id="login-email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="toggle-link">
            Don't have an account? <a href="#" onclick="showSignin()">Sign Up</a>
        </div>
    </div>

    <div class="container" id="signin-container" style="display: none;">
        <h2>Sign Up</h2>
        <form>
            <div class="form-group">
                <label for="signin-username">Username:</label>
                <input type="text" id="signin-username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="signin-email">Email:</label>
                <input type="email" id="signin-email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="signin-password">Password:</label>
                <input type="password" id="signin-password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn">Sign Up</button>
        </form>
        <div class="toggle-link">
            Already have an account? <a href="#" onclick="showLogin()">Login</a>
        </div>
    </div>

    <script>
        const loginContainer = document.getElementById('login-container');
        const signinContainer = document.getElementById('signin-container');

        function showSignin() {
            loginContainer.style.display = 'none';
            signinContainer.style.display = 'block';
        }

        function showLogin() {
            signinContainer.style.display = 'none';
            loginContainer.style.display = 'block';
        }
    </script>
</body>
</html>
