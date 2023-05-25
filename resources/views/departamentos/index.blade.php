<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
</head>
<body>

<a href="{{route('departamentos.create')}}">
    Crear Registro
</a>

<table border="1">
    <thead>
        <tr>
            <th>
                Departamento
            </th>
        </tr>
    </thead>  
    <tbody>
        @foreach($departamentos as $departamento)
            <tr>
                <td>
                    {{ $departamento->nombre }}

                    <a href="{{route('departamentos.show', $departamento->id)}}">Ver</a>

                    <a href="{{route('departamentos.edit', $departamento->id)}}">Editar</a>

                    <form action="{{route('departamentos.destroy', $departamento->id)}}" method="post">
                        @csrf
                        @METHOD('DELETE')
                        <input type="submit" value="eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>
                Departamento
            </th>
        </tr>
    </tfoot>  
</table>

</body>
</html>