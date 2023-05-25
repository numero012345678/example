<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit</title>
</head>
<body>

<form action="{{ route('departamentos.update', $departamento->id) }}" method="post">
    @csrf
    @METHOD('PUT')
    <p>Nombre :<input type="text" name="nombre" value="{{$departamento->nombre}}"></p>
    <input type="submit" value="crear">
</form>

</body>
</html>