<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fb;
            color: #333;
        }

        nav {
            background-color: #1f4e79;
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .card {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-bottom: 15px;
            color: #1f4e79;
        }

        p {
            line-height: 1.7;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #777;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">
            ZAKI
        </div>

        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/profil">Profil</a></li>
            <li><a href="/tentang">Tentang</a></li>
        </ul>
    </nav>

    <div class="container">

        @yield('content')

    </div>

    <footer>
        <p>© 2026 Zaki Syahrul Huda - Laravel 12</p>
    </footer>

</body>
</html>