<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gruppaga o'zgeris kiritiw bo'limi</title>
</head>
<body>
    
    <form action="{{ route('groups.update',$group->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')  
        <input type="text" name="name" value="{{ $group->name }}" ><br>
        <input type="text" name="day" value="{{ $group->day }}"><br>
        <input type="text" name="time" value="{{ $group->time }}"><br>
        <select name="kurc_id">
            @foreach ($kurs as $kurc) 
            <option value="{{ $kurc->id }}">{{ $kurc->name }}</option>
            @endforeach
        </select>
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