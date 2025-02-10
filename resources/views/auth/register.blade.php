<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #ff9a9e, #fad0c4, #a1c4fd);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            color: rgba(255, 255, 255, 0.8); /* Transparent white */
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.3); /* Slightly dark background */
            padding: 10px 15px;
            border-radius: 50%;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .back-button:hover {
            color: white;
            background-color: rgba(0, 0, 0, 0.6); /* Darker background on hover */
            transform: scale(1.1); /* Slight zoom effect */
        }

        .container {
            width: 800px;
            display: flex;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            animation: fadeInUp 1s ease-out forwards, shadowBox 2s ease-in-out infinite; /* Add shadow animation */
        }

        .left-section {
            background: #0f172a;
            color: white;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .left-section h1 {
            font-size: 36px;
            margin: 0;
            transition: color 0.3s ease-in-out;
        }

        .left-section p {
            margin: 10px 0;
            font-size: 14px;
            transition: color 0.3s ease-in-out;
        }

        .left-section:hover h1, .left-section:hover p {
            color: #ff9a9e; /* Highlight text when hovering over the left section */
        }

        .right-section {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-section h2 {
            margin: 0 0 20px 0;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #0f172a;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #0f172a;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff9a9e;
        }

        .signin-link {
            text-align: center;
            margin-top: 10px;
        }

        .signin-link a {
            text-decoration: none;
            color: #ff9a9e;
            transition: color 0.3s ease;
        }

        .signin-link a:hover {
            color: #ff9a9e;
            text-decoration: underline;
        }

        /* Animation for the form container */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Bolder shadow box effect */
        @keyframes shadowBox {
            0% {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            50% {
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4); /* Stronger, bolder shadow */
            }
            100% {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
        }
    </style>
</head>
<body>
    
    <a href="javascript:history.back()" class="back-button">
        &#8592;
    </a>
    <div class="container">
        <div class="left-section">
            <h1>Sign Up</h1>
            <p>Welcome! Please register your account.</p>
        </div>
        <div class="right-section">
            <h2>Registration</h2>
            <form method="POST" action="{{url('/register')}}" >
                @csrf
                <div class="form-group">
                    <label for="Name" :value="__('Name')">Name</label>
                    <input type="text" id="name" placeholder="Enter your name" :value="old('name')">
                </div>
                <div class="form-group">
                    <label for="Email" :value="__('Email')">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" :value="old('email')">
                </div>
                <div class="form-group">
                    <label for="Password" :value="__('Password')"> Password</label>
                    <input type="password" id="password" placeholder="Enter your password" :value="old('password')">
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="signin-link">
                    <p>or</p>
                    <p><a href="{{ route('login') }}">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
