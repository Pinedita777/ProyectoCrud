
    <h1>Crear Libro</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <label>Código:</label>
        <input type="text" name="codigo" value="{{ old('codigo') }}">
        <label>Título:</label>
        <input type="text" name="titulo" value="{{ old('titulo') }}">
        <label>ISBN:</label>
        <input type="text" name="ISBN" value="{{ old('ISBN') }}">
        <label>Editorial:</label>
        <input type="text" name="editorial" value="{{ old('editorial') }}">
        <label>Páginas:</label>
        <input type="text" name="paginas" value="{{ old('paginas') }}">
        <button type="submit">Guardar</button>
    </form>
