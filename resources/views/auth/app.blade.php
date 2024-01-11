<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Penyewaan Buku Politeknik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            letter-spacing: 2px;
            text-transform: uppercase;
            position: relative;
        }

        header:hover {
            background-color: #555;
        }

        .header-title {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .header-subtitle {
            font-size: 14px;
            letter-spacing: 1px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        main {
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            background-color: #f7f7f7;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .form-group {
            position: relative;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: bold;
            position: absolute;
            top: -10px;
            left: 10px;
            background-color: #fff;
            padding: 0 5px;
            color: #007bff;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 2px solid #007bff;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #0056b3;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
        }

        footer:hover {
            background-color: #555;
        }
    </style>
</head>
<<body>
    <header>
        <div class="header-title">Sistem Penyewaan Buku Politeknik</div>
        <div class="header-subtitle">2023 Sistem Penyewaan Buku Politeknik</div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2023 Sistem Penyewaan Buku Politeknik
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
