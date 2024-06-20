<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de trabajos</h1>

    @foreach ($persona as $persona)
    <tr>
        <br>
        <td>{{$persona->cedula}}</td>
        <td>{{$persona->nombre}}</td>
    
        
        <td><a href="{{route('persona.edit',$persona->id)}}">Editar</a></td>
        <td><a href="{{route('persona.show',$persona->id)}}">Detalle</a></td>
        <form action="{{route('persona.destroy',$persona->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <br>
       
       
    </tr>
@endforeach
   
</body>
</html>