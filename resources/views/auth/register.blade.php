<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Registrazione</h2>

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>                    
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/register" method="POST">
        @csrf

        <div>
            <label>Nome</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div>
            <label>Password</label><br>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label>Ripeti</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <button type="submit">Invia</button>

    </form>
</body>
</html>