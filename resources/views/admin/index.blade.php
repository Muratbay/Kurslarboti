<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
</head>
<body>
    <a href="{{ url('logout') }}">shigiw</a>

    <ul> 
        <li><a href="{{ route('kurcs.index') }}">Kurclar</a></li>
        <li><a href="{{ route('groups.index') }}">gruppa</a></li>
    </ul> 
</body>
</html>