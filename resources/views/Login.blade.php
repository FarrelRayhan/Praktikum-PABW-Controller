<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h2>Halaman Login</h2>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <label>Username:</label><br>
        <input type="text" name="username" value="{{ old('username') }}"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
