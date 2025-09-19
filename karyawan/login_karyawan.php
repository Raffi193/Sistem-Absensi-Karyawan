<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Karyawan</title>
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(135deg, rgb(37, 63, 81), rgb(4, 36, 78));
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: 'Roboto', sans-serif;
      color: #fff;
    }

    .login-container {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 8px 15px rgba(29, 83, 120, 0.2);
      padding: 80px;
      width: 300px;
      max-width: 300px;
      text-align: center;
      color: #333;
    }

    .login-container h1 {
      font-size: 30px;
      font-weight: bold;
      color: #4a90e2;
      margin-bottom: 50px;
      margin-top: 0cm;

    }

    .login-container .form-control {
      border-radius: 20px;
      margin-bottom: 20px;
      border: 2px solid #ccc;
      padding: 15px 9px;
      font-size: 19px;
      width: 260px;
    }

    .login-container .btn {
      width: 250px;
      padding: 16px;
      border-radius: 30px;
      background: #4a90e2;
      color: #fff;
      border: none;
      font-size: 19px;
      transition: background 0.3s;
    }

    .login-container .btn:hover {
      background: #357ab8;
    }

    .login-container p {
      font-size: 14px;
      margin-top: 15px;

    }

    .login-container p a {
      color: #4a90e2;
      text-decoration: none;
    }

    .login-container p a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h1>Login Karyawan</h1>
    <form action="pro_login_karyawan.php" method="post">
      <input type="text" name="username" class="form-control" placeholder="Username" required>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <p>&copy; 2024 Sistem Informasi Karyawan</p>
  </div>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>