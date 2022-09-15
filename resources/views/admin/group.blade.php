<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gruppalar beti</title>
</head>
<body>
    <h2>Bul gruppalar kestesi</h2>
    <br>
    <a href="{{ route('groups.create') }}"> <button>Gruppalar qosiw</button></a><br>
    <a href="{{ url ('/') }}"> <button>Back</button></a><br>
    <table border="1">
        <thead>
            <tr>
                <td>Nomeri</td>
                <td>Gruppa ati</td>
                <td>Sabaq kunleri</td>
                <td>Sabaq waqiti</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
        @forelse($groups as $group)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $group->name }}</td>
            <td>{{ $group->day }}</td>
            <td>{{ $group->time }}</td>
            <td><a href="{{ route('groups.edit', $group->id) }}"</a>edit</td>
            <td><form action="{{ route('groups.destroy',$group->id)}}" method="POST">
            @method('DELETE')    
            @csrf
            <input type="submit" value="delete">
            </form>
            </td>
        </tr>
        @empty
            <br>    magliwmatlar joq<br>
        @endforelse
        </tbody>
</body>
</html>