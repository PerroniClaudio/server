<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf

        <div>
            <label>Email</label><br>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div>
            <label>Password</label><br>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label>Ricordami</label>
            <input type="checkbox" name="remember" id="remember">
        </div>
        
        <button type="submit">Invia</button>
    </form>
</body>
</html>l