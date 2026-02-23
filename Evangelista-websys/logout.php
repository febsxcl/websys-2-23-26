<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .logout-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            padding: 50px 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        .logout-icon {
            font-size: 80px;
            color: #667eea;
            margin-bottom: 20px;
        }
        h1 {
            color: #667eea;
            margin-bottom: 15px;
            font-weight: 700;
            font-size: 32px;
        }
        p {
            color: #666;
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .btn-login {
            background: #667eea;
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 40px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-size: 16px;
        }
        .btn-login:hover {
            background: #5568d3;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            text-decoration: none;
        }
        .logout-success {
            color: #31a24c;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <div class="logout-icon">👋</div>
        <h1>See You Soon!</h1>
        <p class="logout-success">You have been successfully logged out.</p>
        <p>Thank you for visiting. Come back anytime!</p>
        <a href="login.php" class="btn-login">Back to Login</a>
    </div>
</body>
</html>
