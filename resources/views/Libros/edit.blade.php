
<h1>Editar Libro</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('libros.update', $libro->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Código:</label>
    <input type="text" name="codigo" value="{{ old('codigo', $libro->codigo) }}">
    <label>Título:</label>
    <input type="text" name="titulo" value="{{ old('titulo', $libro->titulo) }}">
    <label>ISBN:</label>
    <input type="text" name="ISBN" value="{{ old('ISBN', $libro->ISBN) }}">
    <label>Editorial:</label>
    <input type="text" name="editorial" value="{{ old('editorial', $libro->editorial) }}">
    <label>Páginas:</label>
    <input type="text" name="paginas" value="{{ old('paginas', $libro->paginas) }}">
    <button type="submit">Actualizar</button>
</form>