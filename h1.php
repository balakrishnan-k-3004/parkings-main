<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Front Page</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: transparent;
            padding: 15px;
            color: black;
        }
        .navbar a {
            color: red;
            text-decoration: none;
            padding: 20px 20px;
        }
        .slider-container {
            width: 100%;
            max-width: 100%;
            margin: auto;
            overflow: hidden;
            position: relative;
        }
        .slider {
            display: flex;
            width: 100%;
            animation: slide 10s infinite;
        }
        .slide {
            min-width: 100%;
            transition: 0.5s;
        }
        .slide img {
            width: 100%;
            display: block;
        }
        @keyframes slide {
            0% { transform: translateX(0); }
            33% { transform: translateX(-100%); }
            66% { transform: translateX(-200%); }
            100% { transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="login.php" class="login-btn">Login</a>
    </div>
    
    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="download.jpeg" alt="Image 1"></div>
            <div class="slide"><img src="OIP.jpeg" alt="Image 2"></div>
            <div class="slide"><img src="OIP (2).jpeg" alt="Image 3"></div>
        </div>
    </div>
</body>
</html>
