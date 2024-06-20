
    <h1>{{ $libro->titulo }}</h1>
    <p>Código: {{ $libro->codigo }}</p>
    <p>ISBN: {{ $libro->ISBN }}</p>
    <p>Editorial: {{ $libro->editorial }}</p>
    <p>Páginas: {{ $libro->paginas }}</p>
    <a href="{{ route('libros.edit', $libro->id) }}">Editar</a>
    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection