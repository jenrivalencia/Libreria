@extends('layout')

@section('content')
    <div class="container-sm w-75">
        <div class="card mt-5">
            <div class="card-header bg-secondary text-white">EDITAR DE LIBROS</div>
            <div class="card-body">
                <form action="{{ route('libros.update', $libro->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">Libro:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" name="libro"
                                value="{{ $libro->libro }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">Categoria:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" name="categoria"
                                value="{{ $libro->categoria }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">Formato:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" name="formato"
                                value="{{ $libro->formato }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">Cantidad:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" name="cantidad"
                                value="{{ $libro->cantidad }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">Precio:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" name="precio"
                                value="{{ $libro->precio }}">
                        </div>
                    </div>
                    <button class="btn btn-secondary btn-sm">ACTUALIZAR</button>
                    <a class="btn btn-secondary btn-sm" href="{{ route('libros.index') }}">REGRESAR</a>
                </form>
            </div>
        </div>
    </div>
@endsection