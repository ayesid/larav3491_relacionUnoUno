<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Asociar</title>
</head>
<body>
   
    <form action="{{ route('role_user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <h1>Usuarios</h1>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }}</option>
            @endforeach
        </select>
        <br><br>
        <h1>Roles</h1>
        <select name="role_id" id="role_id">
            @foreach ($roles as $rol)
                <option value="{{ $rol->id }}">{{ $rol->id }} - {{ $rol->name }}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>