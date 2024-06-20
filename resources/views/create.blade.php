<form action="{{route('persona.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
        Cedula:
        <br>
        <input type="text" name="cedula">
    </label>
    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
   
    <br>
    <label>
        Lugar:
        <br>
        <input type="text" name="lugar">
    </label>
    <br>
    <label>
        Fecha:
        <br>
        <input type="date" name="Fecha">
    </label>
    <label>
        Hora:
        <br>
        <input type="time" name="hora">
    </label>
   
    <br>
   
    <br><br>
    <button type="submit">Enviar:</button>
    </form>