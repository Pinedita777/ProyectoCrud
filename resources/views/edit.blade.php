<form action="{{route('persona.update', $persona)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Cedula:
    <br>
    <input name="cedula" type="text" value="{{old('cedula',$persona->cedula) }}">
    <br>
    </label>
    <br>
    <label>
    Nombre:
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$persona->nombre)}}">
    <br>
    </label>
    <br>
    <label>
    Lugar:
    <br>
    <input name="lugar" type="text" value="{{old('lugar',$persona->lugar)}}">
    <br>
    </label>
    <br>
    <label>
    Fecha:
    <br>
    <input name="fecha" type="date" value="{{old('fecha',$persona->fecha)}}">
    <br>
    </label>
    <br>
    <label>
    Hora:
    <br>
    <input name="hora" type="time" value="{{old('hora',$persona->hora)}}">
    <br>
    </label>
   
    <button  type="submit">Actualizar</button>
   
</form>