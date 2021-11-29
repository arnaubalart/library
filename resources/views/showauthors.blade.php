<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors</title>
</head>
<body>
    @forelse ($authors as $author)
    <p>{{$author->name}}</p>
    <p>{{$author->email}}</p>
    @empty
        <h1>Está vacío</h1>
    @endforelse
    
</body>
</html>