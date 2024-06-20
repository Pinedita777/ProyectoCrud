


    <h1>Libros</h1>
    <a href="{{ route('libros.create') }}">Crear Libro</a>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach ($libros as $libro)
            <li>
                <a href="{{ route('libros.show', $libro->id) }}">{{ $libro->titulo }}</a>
                <a href="{{ route('libros.edit', $libro->id) }}">Editar</a>
                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
