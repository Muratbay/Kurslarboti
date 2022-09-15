<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kurslar  beti</title>
</head>
<body>
    <h2>Bul kurslar kestesi</h2>
    <br>
    <a href="{{ route('kurcs.create') }}"> <button>Kurslardi qosiw</button></a><br>
    <a href="{{ url ('/') }}"> <button>Back</button></a><br>
    <table border="1">
        <thead>
            <tr>
                <td>Nomeri</td>
                <td>Kurs ati</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
        @forelse($kurcs as $kurc)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $kurc->name }}</td>
            <td><a href="{{ route('kurcs.edit', $kurc->id) }}"</a>edit</td>
            <td><form action="{{ route('kurcs.destroy',$kurc->id)}}" method="POST">
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