<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat Datang, {{ $username }}!</h2>
    <p>Ini adalah halaman dashboard.</p>

    <a href="{{ route('login.show') }}">Logout</a>
</body>
</html>
