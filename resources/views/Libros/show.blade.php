@extends('layout')

@section('content')
    <div class="container-sm w-75">
        <div class="card mt-5">
            <div class="card-header bg-secondary text-white">DETALLE DE LIBRO</div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>ID:</td>
                        <td>{{ $libro->id }}</td>
                    </tr>
                    <tr>
                        <td>LIBRO:</td>
                        <td>{{ $libro->libro }}</td>
                    </tr>
                    <tr>
                        <td>CATEGORIA:</td>
                        <td> {{ $libro->categoria }}</td>
                    </tr>
                    <tr>
                        <td>FORMATO:</td>
                        <td> {{ $libro->formato }}</td>
                    </tr>
                    <tr>
                        <td>CANTIDAD:</td>
                        <td>{{ $libro->cantidad }}</td>
                    </tr>
                    <tr>
                        <td>PRECIO: </td>
                        <td>$ {{ $libro->precio }}</td>
                    </tr>
                </table>
                <a class="btn btn-secondary btn-sm" href="{{ route('libros.index') }}">REGRESAR</a>
            </div>
        </div>
    </div>
@endsection
