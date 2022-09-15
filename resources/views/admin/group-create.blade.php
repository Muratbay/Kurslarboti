<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupplar qosiw beti</title>
</head>
<body>
    <form action="{{ route('groups.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="gruppa ati" ><br>
    <input type="text" name="day" placeholder="sabaq kunleri"><br>
    <input type="text" name="time" placeholder="sabaq waqiti"><br>
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