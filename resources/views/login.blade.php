<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{ url('/check') }}"  method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" name="jiberiw">
    </form>
   
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>