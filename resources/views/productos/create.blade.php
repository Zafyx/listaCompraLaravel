@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir Producto
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('/productos/create/') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="title">Nombre: </label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio: </label>
                            <input type="number" name="precio">
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoría: </label>
                            <input type="text" name="categoria">
                        </div>

                        <div class="form-group">
                            <label for="imagen">Imagen: </label>
                            <input type="url" name="imagen" placeholder="url de la imagen">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción: </label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir Producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@stop
