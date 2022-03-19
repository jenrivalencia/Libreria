@extends('layout')
@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card mt-3 col-md-9 ">
            <div class="card-header text-white bg-secondary">Libros</div>
            <div class="card-body">
                <a class="btn btn-sm btn-secondary mb-2" href="{{ route('libros.create') }}">Registrar Libros</a>
                <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Libro</th>
                            <th>Categoria</th>
                            <th>Formato</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libros as $libro)
                            <tr>
                                <td>{{ $libro->id }}</td>
                                <td>{{ $libro->libro }}</td>
                                <td>{{ $libro->categoria }}</td>
                                <td>{{ $libro->formato }}</td>
                                <td>{{ $libro->cantidad }}</td>
                                <td class="d-flex flex-row justify-content-center">
                                    <a class="btn btn-sm btn-info"
                                        href="{{ route('libros.show', $libro->id) }}">VER</a>&nbsp;
                                    <a class="btn btn-sm btn-warning"
                                        href="{{ route('libros.edit', $libro->id) }}">EDITAR</a>&nbsp;
                                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"> ELIMINAR</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      
                    </tbody>
                </table>
               
                
            </div>
        </div>
    </div>
@endsection